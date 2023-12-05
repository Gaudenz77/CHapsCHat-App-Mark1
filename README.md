<div align="center" style="width:100%; background-size: cover;background-position: center;background-color: #FFFFFF;
  background-repeat: no-repeat; ">

![ChapsChatLogo](https://github.com/Gaudenz77/CHapsCHat-App-Mark1/assets/42372680/4d5f828f-1bee-416d-a1c9-16aeb4b6a3d1)

</div>
<div align="center" style="background-color:#FFffff; height:28.2px">

[![Gaudenz77@Krakatoom-Design - CHaps-CHat-App](https://img.shields.io/badge/Gaudenz77%40Krakatoom--Design-CHaps--CHat--App-ffffff?style=for-the-badge&logo=laravel)](https://github.com/Gaudenz77/CHapsCHat-App-Mark1)

</div>

---
# Meet'n'Code - CHapsCHat-App - Mark 1

## ChapsChat: All-in-One Coding, Chat, Library and Blog Platform

### ChapsChat is a versatile web application combining coding, communication, and content creation:

  *  Playground: Start with a code editor to craft HTML or JavaScript, instantly previewing changes. Chat with other users for quick help or knowledge/link sharing.
  * KnowledgeSphere: Store personal insights, knowledge, and text content securely in a dedicated database.
  * BlogoSphere: Express your thoughts, ideas, and interests through personalized blogs, open to registered users.

## Project context
### Problem:
During my web development crash course, I found that existing code editor apps were either expensive or too feature-heavy, not meeting my needs for simplicity and functionality.

### Analysis:
I tested various professional apps like Codepen, TrepEdit, Dcoder, Anwriter Free, and Spck Editor, but they didn't satisfy me. I wanted a user-friendly editor similar to VS Code for testing layouts, JavaScript functions, and CSS selectors. Additionally, I desired easy access to CDNs and the ability to store code snippets and resources in a personal library. I also wanted a built-in chat feature for discussing coding ideas without switching to another platform.

### Hypothesis:
To address these issues, I decided to create CHapsChat-App, a web platform integrating a code editor, a messenger, and a library. I aimed to combine the functionality I desired and showcase my knowledge gained from learning frameworks like Laravel, Vue.js, and Bootstrap.

### Solution/Synthesis:
Welcome to ChapsChat-Meeting-Space! Upon registration, you'll access the "Playground" featuring the Messagecenter powered by Pusher and a user-friendly code editor based on Monaco (the core editor of VS Code). The editor provides separate sections for HTML, CSS, and JavaScript, with future updates including combined editors. Your discoveries can be stored in the KnowledSphere personal library.

Additionally, you can share knowledge through the Blogosphere, where articles are publicly accessible. Please use the platform responsibly, respecting common decency and refraining from discrimination. As the administrator, I'll handle any misuse personally.

Feel free to reach out via the contact form or email at masterofceremonies@krakatoom.ch. Join us in exchanging knowledge and enjoy the mobile-first approach of the app. Happy coding!

## How To Use:

This website/app is designed for both mobile and desktop use. Your feedback and suggestions are greatly appreciated, helping us improve the user experience and responsiveness. Please provide your input via the feedback form. Thank you!

### Getting Started:

  1. Explore the homepage to satisfy your curiosity.
  2. Register and complete the Turing Test by ReCaptcha, or log in if you have an account.
  3. Navigate through content pages and enjoy exploring the app's features.

### Key Features:

### [Playground]('https://krakatoom.ch/playground')

  * <b>Messenger</b>: Engage in text conversations, exchange ideas, and delete your messages.
  * <b>Editor</b>: Write code using three editors, toggle below the frame. Preview adapts with HTML, CSS, and JS formatting. Features include "Format Code," dark/bright mode switch, and undo/redo buttons.
  * <b>Previews</b>: HTML preview supports common techniques, inline CSS, and in-code JavaScript. Most CDN links function correctly. Individual JavaScript preview shows console output.

### [BlogoSphere]('https://krakatoom.ch/blogoSphere')

  * Read interesting blog posts.
  * Registered users can create posts, adding titles, topic groups, and content with optional images.
  * Blog creators can delete their posts. Admin (me) can delete all posts if necessary.

### [KnowledgeSphere]('https://krakatoom.ch/knowledgeSphere')

  * Personal library to store your knowledge.
  * Add your knowledge with HTML tags (links, list formatting).
  * Direct access to search engines like Google, Wikipedia, and Stack Overflow.
  * Filter your library by topic, content, or date (to be confirmed).
  * Edit and delete entries individually.

Feel free to provide constructive critiques, suggest new features, report safety issues, or just say hi! Cheers, Gaudenz.

------------------------------
## Setup from Github (LAMP / Docker-Sail)
### Setup / Installation with LAMP Stack

### Prerequisites

* LAMP Stack (Linux/Apache/Mysql/Php) or XAMPP-setup (Windows)
* [Composer]('https://getcomposer.org/download/') 
* PHP 8.1

```
sudo apt install php libapache2-mod-php php-mysql
```

* Mysql or Mariadb Database

### Setup LAMP

* Clone the repository:</li>

```
git clone <repository_url>
```

* Open repository in editor of your choice
* Open terminal
* Start Database

```bash
sudo systemctl start mariadb
```

* Create Database

```bash
CREATE DATABASE <name database>;
```

* Create User (these are the Env.variables afterwards)

```bash
CREATE USER 'DB_USERNAME'@'localhost' IDENTIFIED BY 'DB_PASSWORD';
```

* Grant user previleges

```bash
GRANT ALL PRIVILEGES ON <name database>.* TO 'DB_USERNAME'@'localhost';
FLUSH PRIVILEGES;
```


### Install dependencies

* Install Node/NPM if needed

```
composer install
```

* Update Composer

```
composer update 
```


* If not already installed, get [Node.js]('https://nodejs.org/')<br></li>

* Install Node / NPM if needed<br>

```
npm install
```

* If installed, update

```
npm update 
```

* Generate Key:

```
php artisan key: generate
```

* Run Database

```
php artisan serve
```

[<h4>* Get Composer]('https://www.digitalocean.com/community/tutorials/how-to-install-and-use-composer-on-ubuntu-20-04')

### Setup / Installation Docker/Npm

* get github code for cloning
* Open repository in editor of your choice
* Open terminal
* Insert following code

```bash
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/var/www/html \
    -w /var/www/html \
    laravelsail/php82-composer:latest \
    composer install --ignore-platform-reqs
```

* Start docker(sail) and dev server:

```bash
sail up -d
```

```bash
sail npm run dev
```

* In case npm not running:

```
sail npm install --save-dev
```

*only if you need it dev-only, otherwise, remove "--save-dev"

### Any feedback or assisting constructive critique is welcome.<br> Feel free to reach out or text via [Mail@Me](mailto:gaudenzraiber@yahoo.de).

----
## License:
* none, free use
----
## Tools Used:

* [Github](https://github.com/CyrSen/MP_MOX)
* [Laravel - Breeze](https://laravel.com/docs/10.x/)
* [Laravel - Sail](https://laravel.com/)
* [Pusher Service](https://pusher.com)
* [vue3.js](https://https://vuejs.org/)
* [Bootstrap_5.3](https://getbootstrap.com/docs/5.3/getting-started/introduction/)
* [MDB](https://mdbootstrap.com/)
* [Google Fonts](https://fonts.google.com/)
* [Fontawesome](https://fontawesome.com/)
* [Animate.css](https://animate.style/)
* [AOS](https://michalsnik.github.io/aos/)
* [ChatGPT](https://openai.com/chatgpt)
* [Visual Studio Code](https://code.visualstudio.com/)introduction/)
* Internet for research
* imagination 
* feeling for details
* the will to learn, improve share knowledge throughout the whole team-experience
*  A special thanks goes to [ChatGPT](https://openai.com/chatgpt) for great support as lector, idea giver, teacher and simply an amazing tool that will change the world
----
## Main Content:
<div style="text-align:center; font-size:20px">

[Github](https://github.com/Gaudenz77/CHapsCHat-App-Mark1)<br>
[Figma](https://www.figma.com/file/EQlfkQ1kCVGsY77tNYVzPH/CHapsChat-App-Draft?type=design&node-id=34%3A3&t=Xmty5PKXN2n6I9qL-1)<br>

</div>

----

### 20230511 1st rm / Final edit before delivery 20230719 
A production by [Krakatoom-Design Inc.](https://github.com/Gaudenz77) 
