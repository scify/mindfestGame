<?php namespace App\Services;


use App\Models\SocialUser;
use App\Models\User;

class AccountService {

    public function postLogin($loggedInUser, $socialMedia) {

        $socialUser = SocialUser::where('social_id', $loggedInUser->getId())->first();

        if ($socialUser == null) {
            $socialUser = $this->saveSocialUser($loggedInUser, $socialMedia);
            $user = $this->saveUser($socialUser);
            \Auth::login($user);
        } else {
            $user = User::where('email', $loggedInUser->email)->first();
            if ($user != null)
                \Auth::login($user);
            else{
                $user = $this->saveUser($socialUser);
                \Auth::login($user);
            }
        }

        return $user;
    }

    /**
     * Save the actual user to the db
     *
     * @param $loggedInUser
     * @return static
     */
    public function saveUser($loggedInUser) {
        $user = User::create([
            'name' => $loggedInUser->name,
            'email' => $loggedInUser->email,
            'password' => bcrypt(substr($loggedInUser->token, 0, 10))
        ]);

        return $user;
    }

    /**
     * Save the social media user
     *
     * @param $socialUser
     * @param $socialMedia
     * @return SocialUser
     */
    public function saveSocialUser($socialUser, $socialMedia) {
        //check if the user already exists
        $user = SocialUser::where('social_id', $socialUser->getId())->first();

        if ($user == null) {
            $user = new SocialUser([
                'social_id' => $socialUser->id,
                'name' => $socialUser->name,
                'nickname' => $socialUser->nickname,
                'email' => $socialUser->email,
                'avatar' => $socialUser->avatar,
                'social_media' => $socialMedia,
            ]);
            $user->save();
        }

        return $user;
    }
}
