<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Arvo');

        body,
        html {
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            width: 100%;
            height: 100%;
            background: #f5f4f4;
            font-size: 13px;
            font-family: 'Arvo', monospace;

            @supports(display: grid) {
                display: block;
            }
        }

        .message {
            border: 1px solid #d2d0d0;
            padding: 2em;
            font-size: 1.7vw;
            box-shadow: -2px 2px 10px 0px rgba(#444, 0.4);

            @supports(display: grid) {
                display: none;
            }
        }

        .section {
            display: none;
            padding: 2rem;

            @media screen and (min-width: 768px) {
                padding: 4rem;
            }

            @supports(display: grid) {
                display: block;
            }
        }

        h1 {
            font-size: 2rem;
            margin: 0 0 1.5em;
        }

        .grid {
            display: grid;
            grid-gap: 30px;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            grid-auto-rows: 150px;
            grid-auto-flow: row dense;
        }

        .item {
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            box-sizing: border-box;
            background: #0c9a9a;
            color: #fff;
            grid-column-start: auto;
            grid-row-start: auto;
            color: #fff;
            background: url('https://images.unsplash.com/photo-1470124182917-cc6e71b22ecc?dpr=2&auto=format&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb&crop=');
            background-size: cover;
            background-position: center;
            box-shadow: -2px 2px 10px 0px rgba(#444, 0.4);
            transition: transform 0.3s ease-in-out;
            cursor: pointer;
            counter-increment: item-counter;

            &:nth-of-type(3n) {
                background-image: url('https://images.unsplash.com/photo-1422255198496-21531f12a6e8?dpr=2&auto=format&fit=crop&w=1500&h=996&q=80&cs=tinysrgb&crop=');
            }

            &:nth-of-type(4n) {
                background-image: url('https://images.unsplash.com/photo-1490914327627-9fe8d52f4d90?dpr=2&auto=format&fit=crop&w=1500&h=2250&q=80&cs=tinysrgb&crop=');
            }

            &:nth-of-type(5n) {
                background-image: url('https://media.licdn.com/dms/image/D5603AQEtX-ooj95AXQ/profile-displayphoto-shrink_800_800/0/1672667499593?e=2147483647&v=beta&t=X1A7lUkE2MabN3rrv6i7KGUTAkbnSB6ZE79mUSc8pTU');
            }

            &:nth-of-type(6n) {
                background-image: url('https://images.unsplash.com/photo-1464652149449-f3b8538144aa?dpr=2&auto=format&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb&crop=');
            }

            &:after {
                content: '';
                position: absolute;
                width: 100%;
                height: 100%;
                background-color: black;
                opacity: 0.3;
                transition: opacity 0.3s ease-in-out;
            }

            &:hover {
                transform: scale(1.05);

                &:after {
                    opacity: 0;
                }
            }

            &--medium {
                grid-row-end: span 2;
            }

            &--large {
                grid-row-end: span 3;
            }

            &--full {
                grid-column-end: auto;

                @media screen and (min-width: 768px) {
                    grid-column: 1/-1;
                    grid-row-end: span 2;
                }
            }

            &__details {
                position: relative;
                z-index: 1;
                padding: 15px;
                color: #444;
                background: #fff;
                text-transform: lowercase;
                letter-spacing: 1px;
                color: #828282;

                &:before {
                    content: counter(item-counter);
                    font-weight: bold;
                    font-size: 1.1rem;
                    padding-right: 0.5em;
                    color: #444;
                }
            }
        }
    </style>
    <div class="message">
        Sorry, your browser does not support CSS Grid. 😅
    </div>
    <section class="section">
        <h1>Welcome To The Official Website Of Adivaaram Teamzz🔥🔥</h1>
        <div class="grid">
            <div class="item">
                <div class="item__details">
                    jelly-o brownie sweet
                </div>
            </div>
            <div class="item item--large">
                <div class="item__details">
                    Muffin jelly gingerbread
                </div>
            </div>
            <div class="item item--medium">
                <div class="item__details">
                    sesame snaps chocolate
                </div>
            </div>
            <div class="item item--large">
                <div class="item__details">
                    Oat cake
                </div>
            </div>
            <div class="item item--full">
                <div class="item__details">
                    jujubes cheesecake
                </div>
            </div>
            <div class="item item--medium">
                <div class="item__details">
                    Dragée pudding brownie
                </div>
            </div>
            <div class="item item--large">
                <div class="item__details">
                    Oat cake
                </div>
            </div>
            <div class="item">
                <div class="item__details">
                    powder toffee
                </div>
            </div>
            <div class="item item--medium">
                <div class="item__details">
                    pudding cheesecake
                </div>
            </div>
            <div class="item item--large">
                <div class="item__details">
                    toffee bear claw
                </div>
            </div>
            <div class="item">
                <div class="item__details">
                    cake cookie croissant
                </div>
            </div>
            <div class="item item--medium">
                <div class="item__details">
                    liquorice sweet roll
                </div>
            </div>
            <div class="item item--medium">
                <div class="item__details">
                    chocolate marzipan
                </div>
            </div>
            <div class="item item--large">
                <div class="item__details">
                    danish dessert lollipop
                </div>
            </div>
            <div class="item">
                <div class="item__details">
                    sugar plum dragée
                </div>
            </div>
        </div>
        </div>
</body>

</html>