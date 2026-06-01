# Week_11_CSRF_XSS
Week_11_josef_CSRF_XSS


Week_11_CSRF_XSS/
├── builds/
├── composer.json
├── LICENSE
├── phpunit.dist.xml
├── preload.php
├── README.md
├── spark (CLI tool)
│
├── app/                          # Main application code
│   ├── Common.php
│   ├── index.html
│   ├── Config/                   # Configuration files
│   │   ├── App.php, Routes.php, Security.php, Session.php
│   │   ├── Database.php, Email.php, Encryption.php
│   │   └── ... (20+ config files)
│   ├── Controllers/              # Request handlers
│   │   ├── BaseController.php
│   │   ├── FormController.php
│   │   └── Home.php
│   ├── Database/
│   │   ├── Migrations/
│   │   └── Seeds/
│   ├── Filters/
│   ├── Helpers/
│   ├── Language/
│   │   └── en/
│   ├── Libraries/
│   ├── Models/
│   ├── ThirdParty/
│   └── Views/                    # Templates
│       ├── form.php
│       ├── welcome_message.php
│       └── errors/
│
├── public/                       # Web root
│   ├── index.php
│   └── robots.txt
│
├── tests/                        # Test suite
│   ├── README.md
│   ├── database/
│   │   └── ExampleDatabaseTest.php
│   ├── session/
│   │   └── ExampleSessionTest.php
│   ├── unit/
│   │   └── HealthTest.php
│   └── _support/
│
├── vendor/                       # Composer dependencies
│   ├── codeigniter4/framework/
│   ├── phpunit/
│   ├── symfony/
│   └── ... (other packages)
│
└── writable/                     # Runtime writable directories
    ├── cache/
    ├── debugbar/
    ├── logs/
    ├── session/
    └── uploads/




This is a CodeIgniter 4 web application focused on CSRF/XSS security testing, with:

app/ - Your custom application logic (controllers, models, views, config)
public/ - Entry point and public assets
tests/ - PHPUnit test files
vendor/ - Composer packages (CodeIgniter framework + dependencies)
writable/ - Runtime data (cache, logs, sessions, uploads)


