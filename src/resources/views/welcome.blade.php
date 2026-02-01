<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo</title>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700;900&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Noto Sans JP', sans-serif;
            background: url("{{{ url('img/todo記入欄%20(1).jpg') }}}") center bottom no-repeat;
            background-size: cover;
            background-color: #7DD3D3;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 40px 20px 100px;
            position: relative;
        }

        .container {
            width: 100%;
            max-width: 500px;
            display: flex;
            flex-direction: column;
            align-items: center;
            z-index: 1;
            padding-bottom: 180px;
        }

        h1 {
            font-size: 72px;
            font-weight: 900;
            color: #2C4A4A;
            margin-bottom: 40px;
            letter-spacing: -2px;
        }

        .todo-form {
            width: 100%;
        }

        .input-wrapper {
            background: #F5F5F5;
            border-radius: 25px;
            padding: 25px 30px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
            margin-bottom: 25px;
        }

        .input-wrapper input {
            width: 100%;
            border: none;
            background: transparent;
            font-size: 18px;
            color: #333;
            outline: none;
            font-family: 'Noto Sans JP', sans-serif;
        }

        .input-wrapper input::placeholder {
            color: #C0C0C0;
        }

        .submit-button {
            background: #F5F5F5;
            border: none;
            border-radius: 30px;
            padding: 20px 80px;
            font-size: 28px;
            font-weight: 700;
            color: #4A8B8B;
            cursor: pointer;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
            font-family: 'Noto Sans JP', sans-serif;
            display: block;
            margin: 0 auto;
            transition: all 0.3s ease;
        }

        .submit-button:hover {
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
            transform: translateY(-2px);
        }

        .submit-button:active {
            transform: translateY(0);
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        }

        @media (max-width: 600px) {
            h1 {
                font-size: 56px;
            }

            .submit-button {
                font-size: 24px;
                padding: 18px 60px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Todo</h1>
        
        <form action="/todo/create" method="POST" class="todo-form">
            @csrf
            <div class="input-wrapper">
                <input type="text" name="task" placeholder="例:毎朝ウォーキングする。" required>
            </div>
            <button type="submit" class="submit-button">作成</button>
        </form>
    </div>

    <x-footer-navigation />
</body>
</html>
