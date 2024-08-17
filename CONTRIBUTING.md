# Contributing to Simple Personal Budget Manager

First off, thank you for considering contributing to Simple Personal Budget Manager! It's people like you that make it a great tool for everyone.

## Where do I go from here?

If you've noticed a bug or have a feature request, make sure to check our [Issues](https://github.com/mariominondo/simple-budget-manager/issues) page to see if someone else has already created a ticket. If not, go ahead and [make one](https://github.com/mariominondo/simple-budget-manager/issues/new)!

## Fork & create a branch

If this is something you think you can fix, then [fork Simple Personal Budget Manager](https://help.github.com/articles/fork-a-repo) and create a branch with a descriptive name.

A good branch name would be (where issue #325 is the ticket you're working on):

```sh
git checkout -b 325-add-japanese-localization
```

## Get the test suite running

Make sure you're using the latest version of PHP and have Composer installed. Then, run:

```sh
composer install
php artisan test
```

## Implement your fix or feature

At this point, you're ready to make your changes! Feel free to ask for help; everyone is a beginner at first.

## View your changes in a browser

Make sure to take a look at your changes in a browser. You can use Laravel's built-in server:

```sh
php artisan serve
```

Then visit `http://localhost:8000` to view the app.

Build style assets:
```sh
npm run dev
```

## Get the style right

Your patch should follow the same conventions & pass the same code quality checks as the rest of the project. `php artisan test` will give you feedback in this regard.

## Make a Pull Request

At this point, you should switch back to your master branch and make sure it's up to date with Simple Personal Budget Manager's master branch:

```sh
git remote add upstream git@github.com:mariominondo/simple-budget-manager.git
git checkout master
git pull upstream master
```

Then update your feature branch from your local copy of master, and push it!

```sh
git checkout 325-add-japanese-localization
git rebase master
git push --set-upstream origin 325-add-japanese-localization
```

Finally, go to GitHub and [make a Pull Request](https://help.github.com/articles/creating-a-pull-request) :D

## Keeping your Pull Request updated

If a maintainer asks you to "rebase" your PR, they're saying that a lot of code has changed, and that you need to update your branch so it's easier to merge.

To learn more about rebasing in Git, there are a lot of [good](https://git-scm.com/book/en/v2/Git-Branching-Rebasing) [resources](https://www.atlassian.com/git/tutorials/rewriting-history/git-rebase) but here's the suggested workflow:

```sh
git checkout 325-add-japanese-localization
git pull --rebase upstream master
git push --force-with-lease 325-add-japanese-localization
```

## Code review

A team member will review your pull request and provide feedback. Please be patient as review times can vary.

## Thank you!

Thank you for your contribution! We appreciate your time and effort to make this project better.
