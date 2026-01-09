<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>О нас - РСО Севастополь</title>
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

        .card {
            background: white;
            border-radius: 10px;
            padding: 30px;
            margin-bottom: 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .logo {
            font-size: 1.8em;
            font-weight: bold;
            color: #667eea;
            text-decoration: none;
        }

        ul, ol {
            margin: 15px 0 15px 30px;
        }

        li {
            margin: 10px 0;
        }

        footer {
            background: rgba(255, 255, 255, 0.95);
            padding: 30px 0;
            margin-top: 40px;
            text-align: center;
        }

        @media (max-width: 768px) {
            nav {
                flex-direction: column;
                gap: 10px;
            }

            h1 {
                font-size: 2em;
            }

            .card {
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
        <div class="card">
            <h1>О Российских Студенческих Отрядах</h1>
            
            <h2>История движения</h2>
            <p>Российские студенческие отряды (РСО) — это массовая молодёжная организация. Движение студенческих отрядов зародилось в СССР в 1959 году, когда студенты  МГУ им. М.В. Ломоносова и других московских вузов выехали на целину для помощи в строительстве.</p>
            
            <p>С тех пор движение значительно выросло и развилось. Сегодня студенческие отряды работают по всей России, участвуя в крупнейших стройках страны, работая вожатыми в детских лагерях, помогая в организации масштабных событий.</p>

            <h2>РСО в Севастополе</h2>
            <p>Севастопольское региональное отделение РСО объединяет студентов вузов и колледжей города-героя Севастополя. Наши бойцы активно участвуют в развитии города, работают на строительных объектах, в детских лагерях, помогают в проведении городских мероприятий.</p>

            <h3>Наши достижения:</h3>
            <ul>
                <li>Более 500 активных бойцов</li>
                <li>Участие в строительстве объектов инфраструктуры Севастополя</li>
                <li>Работа в детских оздоровительных лагерях</li>
                <li>Организация социальных проектов и волонтёрских акций</li>
                <li>Победы в региональных и всероссийских конкурсах</li>
            </ul>

            <h2>Наши ценности</h2>
            <ul>
                <li><strong>Труд</strong> — мы верим в силу честного труда и профессионализма</li>
                <li><strong>Дружба</strong> — поддержка товарищей и взаимопомощь</li>
                <li><strong>Развитие</strong> — постоянное совершенствование навыков и знаний</li>
                <li><strong>Ответственность</strong> — за результат своей работы и свою команду</li>
                <li><strong>Патриотизм</strong> — любовь к Родине и вклад в её развитие</li>
            </ul>

            <h2>Направления работы</h2>
            
            <h3>Строительные отряды</h3>
            <p>Наши строительные отряды работают на объектах по всей стране. Студенты получают опыт работы в строительной сфере, зарабатывают деньги и вносят вклад в развитие инфраструктуры.</p>

            <h3>Педагогические отряды</h3>
            <p>Вожатые педагогических отрядов работают в детских оздоровительных лагерях, помогая детям провести незабываемое лето, развить творческие способности и найти новых друзей.</p>

            <h3>Волонтёрские проекты</h3>
            <p>Бойцы РСО активно участвуют в социальных проектах: помощь ветеранам, экологические акции, благотворительность, работа с детьми из социально незащищённых семей.</p>

            <h2>Присоединяйтесь к нам!</h2>
            <p>Если вы студент, хотите получить опыт работы, найти новых друзей и внести вклад в развитие своего региона — вступайте в РСО Севастополя!</p>
            
            <p><a href="/join" style="color: #667eea; text-decoration: underline;">Узнать, как вступить в отряд</a></p>
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
