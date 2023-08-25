<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="./assets/CSS/btn-style.css">
    <style>
        .container {
            max-width: 1440px;
            padding: 20px 40px;
            margin: auto;
        }

        .main-content {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .book-item {
            display: flex;
            height: 160px;
            line-height: 1.6;
            border: 1px solid #333;
            border-radius: 8px;
            overflow: hidden;
        }

        .book-item__img {
            flex: 1;
            display: flex;
        }

        .item__img img {
            flex: 1;
        }

        .book-item__content {
            flex: 3;
        }

        .book-item__content--description {}

        .action {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            align-items: center;
        }

        .action__btn--edit {
            flex: 1;
            display: flex;
            align-items: center;
        }

        .action__btn--delete {
            flex: 1;
            display: flex;
            align-items: center;
        }


        .book-item+.book-item {
            margin-top: 20px;
        }

        .content {
            display: flex;
            justify-content: space-between;
            font-size: 20px;
            font-weight: 700;
            padding: 10px 0;
            height: 30px;
            overflow: hidden;
        }

        .content__name {}

        /*  */
        .btn-add-prd {
            position: fixed;
            left: 20px;
            bottom: 20px;
        }
    </style>

</head>

<body>
    <div class="container">
        <div class="main-content">
            @foreach ($pro as $value)
            <div class="book-item">
                <div class="book-item__img">
                    <img src="./img/book/ {{$value->img}}" alt="img" />
                    <!-- <img src="" alt=""> -->
                </div>
                <div class="book-item__content">
                    <div class="content">
                        <div class="content__id"> {{$value->book_id}}</div>
                        <div class="content__name"> {{$value->book_name}} </div>
                        <div class="content__price">{{$value->price}} </div>
                    </div>
                    <div class="book-item__content--description"> {{$value->description}}</div>
                </div>
                <div class="action">
                    <div class="action__btn--edit">

                        <a class="btn btn--size-s btn--success" href="">edit</a>

                    </div>
                    <div class="action__btn--delete">

                        <a class="btn btn--size-s btn--danger" href="">delete</a>

                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <a href="themsp.php" class="btn btn-size-s btn--warn btn-add-prd">Thêm sản phẩm</a>
    </div>
    <footer class="tooter">

    </footer>
</body>
</html>