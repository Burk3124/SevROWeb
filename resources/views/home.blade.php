<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>РСО Севастополь - Российские Студенческие Отряды</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            line-height: 1.6;
            color: #333;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        header {
            background: rgba(255, 255, 255, 0.95);
            padding: 20px 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 40px;
        }

        header .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        h1 {
            color: #667eea;
            font-size: 2.5em;
            margin-bottom: 10px;
        }

        h2 {
            color: #667eea;
            font-size: 2em;
            margin: 30px 0 20px;
        }

        h3 {
            color: #764ba2;
            font-size: 1.5em;
            margin: 20px 0 10px;
        }

        .hero {
            background: white;
            border-radius: 15px;
            padding: 40px;
            margin-bottom: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .card {
            background: white;
            border-radius: 10px;
            padding: 30px;
            margin-bottom: 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            margin: 20px 0;
        }

        .btn {
            display: inline-block;
            padding: 12px 30px;
            background: #667eea;
            color: white;
            text-decoration: none;
            border-radius: 25px;
            transition: all 0.3s;
            font-weight: 600;
            margin: 10px 10px 10px 0;
        }

        .btn:hover {
            background: #764ba2;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .btn-secondary {
            background: #764ba2;
        }

        .btn-secondary:hover {
            background: #667eea;
        }

        ul {
            list-style-position: inside;
            margin: 15px 0;
        }

        li {
            margin: 10px 0;
            padding-left: 10px;
        }

        footer {
            background: rgba(255, 255, 255, 0.95);
            padding: 30px 0;
            margin-top: 40px;
            text-align: center;
        }

        .logo {
            font-size: 1.8em;
            font-weight: bold;
            color: #667eea;
            text-decoration: none;
        }

        nav {
            display: flex;
            gap: 20px;
            align-items: center;
        }

        nav a {
            color: #667eea;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
        }

        nav a:hover {
            color: #764ba2;
        }

        .subtitle {
            color: #666;
            font-size: 1.1em;
            margin-bottom: 20px;
        }

        @media (max-width: 768px) {
            nav {
                flex-direction: column;
                gap: 10px;
            }

            h1 {
                font-size: 2em;
            }

            h2 {
                font-size: 1.5em;
            }

            .hero, .card {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <a href="/" class="logo">РСО Севастополь</a>
            <nav>
                <a href="/">Главная</a>
                <a href="/about">О нас</a>
                <a href="/join">Вступить</a>
            </nav>
        </div>
    </header>

    <div class="container">
        <div class="hero">
            <h1>Российские Студенческие Отряды Севастополя</h1>
            <p class="subtitle">Объединение студентов для трудовой деятельности, развития и социального роста</p>
            <a href="/about" class="btn">Узнать больше</a>
            <a href="/join" class="btn btn-secondary">Вступить в РСО</a>
        </div>

        <div class="card" id="about">
            <h2>О нас</h2>
            <p>Российские студенческие отряды (РСО) — это крупнейшая молодёжная организация страны. Мы объединяем студентов, которые хотят получить опыт работы, развить свои навыки и внести вклад в развитие региона.</p>
            
            <p>РСО Севастополь — это активное сообщество студентов, которые:</p>
            <ul>
                <li>Работают на стройках и объектах города</li>
                <li>Участвуют в социальных проектах</li>
                <li>Развивают лидерские качества</li>
                <li>Создают новые возможности для молодёжи</li>
            </ul>
        </div>

        <h2>Направления деятельности</h2>
        <div class="grid">
            <div class="card">
                <h3>Студенческие трудовые отряды (СТО)</h3>
                <p>Работа на строительных объектах, благоустройство территорий, участие в значимых проектах развития города Севастополя.</p>
            </div>

            <div class="card">
                <h3>Педагогические отряды</h3>
                <p>Работа вожатыми в детских лагерях, организация досуга детей, проведение образовательных программ.</p>
            </div>

            <div class="card">
                <h3>Волонтёрские проекты</h3>
                <p>Участие в социальных акциях, помощь ветеранам, экологические инициативы, работа с детьми.</p>
            </div>
        </div>

        <div class="card" id="join">
            <h2>Как вступить в РСО?</h2>
            <p>Стать бойцом студенческого отряда может любой студент очной формы обучения:</p>
            <ol>
                <li>Заполните заявку на вступление</li>
                <li>Пройдите собеседование</li>
                <li>Участвуйте в школе командиров</li>
                <li>Получите путёвку на объект</li>
            </ol>
            
            <p style="margin-top: 20px;"><strong>Контакты:</strong></p>
            <p>Email: <a href="mailto:rso-sevastopol@example.com">rso-sevastopol@example.com</a></p>
            <p>Телефон: +7 (XXX) XXX-XX-XX</p>
            
            <a href="/join" class="btn">Подать заявку</a>
        </div>

        <div class="card">
            <h2>Преимущества участия</h2>
            <div class="grid">
                <div>
                    <h3>💼 Опыт работы</h3>
                    <p>Получите реальный трудовой опыт и заработок во время учёбы</p>
                </div>
                <div>
                    <h3>🤝 Новые знакомства</h3>
                    <p>Найдите друзей и единомышленников со всей страны</p>
                </div>
                <div>
                    <h3>📈 Развитие навыков</h3>
                    <p>Развивайте лидерские качества и профессиональные компетенции</p>
                </div>
                <div>
                    <h3>🎯 Карьерные перспективы</h3>
                    <p>Участие в РСО — это преимущество при трудоустройстве</p>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <p>&copy; {{ date('Y') }} РСО Севастополь. Все права защищены.</p>
            <p>Российские Студенческие Отряды - движение для активной молодёжи</p>
        </div>
    </footer>
</body>
</html>
