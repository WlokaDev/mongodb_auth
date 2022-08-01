<?php

namespace Wlokadev\MongoDBAuth\Traits;

use App\NewAccessToken;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Laravel\Sanctum\Contracts\HasAbilities;
use Laravel\Sanctum\Sanctum;

trait HasApiTokensTrait
{
    /**
     * The access token the user is using for the current request.
     *
     * @var HasAbilities
     */

    protected HasAbilities $accessToken;

    /**
     * Get the access tokens that belong to model.
     *
     * @return MorphMany
     */

    public function tokens()
    {
        return $this->morphMany(Sanctum::$personalAccessTokenModel, 'tokenable');
    }

    /**
     * Determine if the current API token has a given scope.
     *
     * @param  string  $ability
     * @return bool
     */

    public function tokenCan(string $ability) : bool
    {
        return $this->accessToken->can($ability);
    }

    /**
     * Get the access token currently associated with the user.
     *
     * @return HasAbilities
     */

    public function currentAccessToken(): HasAbilities
    {
        return $this->accessToken;
    }

    /**
     * Set the current access token for the user.
     *
     * @param HasAbilities $accessToken
     * @return $this
     */

    public function withAccessToken(HasAbilities $accessToken): static
    {
        $this->accessToken = $accessToken;

        return $this;
    }
}
