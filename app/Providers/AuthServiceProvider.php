<?php

namespace App\Providers;

use App\Models\Article;
use App\Models\Comment;
use App\Models\Discussion;
use App\Models\Draft;
use App\Models\SpecialPage;
use App\Models\User;
use App\Policies\ArticlePolicy;
use App\Policies\CommentPolicy;
use App\Policies\DiscussionPolicy;
use App\Policies\DraftPolicy;
use App\Policies\SpecialPagePolicy;
use App\Policies\UserPolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Laravel\Passport\Passport;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
        Article::class => ArticlePolicy::class,
        User::class => UserPolicy::class,
        Comment::class => CommentPolicy::class,
        SpecialPage::class => SpecialPagePolicy::class,
        Draft::class => DraftPolicy::class,
        Discussion::class => DiscussionPolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        Passport::routes();

        $this->registerPolicies();

        //
    }
}
