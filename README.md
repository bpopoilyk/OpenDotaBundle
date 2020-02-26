Installation
============

Add repository to composer.json

```sh
....
"repositories": [
        {
            "type": "vcs",
            "url": "git@github.com:bpopoilyk/OpenDotaBundle.git"
        }
    ]
```

Execute from your project directory

```sh
composer require bpopoilyk/opendota-bundle
```

Add to your bundles.php file
```sh
[
    ....
    App\OpenDotaBundle\OpenDotaBundle::class => ['all' => true],
    ....
]
```
