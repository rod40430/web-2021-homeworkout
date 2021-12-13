<?php
    $type = $_GET["type"];

    if($type == null){
        echo "
        <script>
            history.back();
        </script>";
    }
    $conn = mysqli_connect('localhost', 'root', '123456', 'ht');
    $sql = "select * from bundle where video_name = '$type'";
    $result = mysqli_query($conn, $sql);
    $row =mysqli_fetch_array($result);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        .player{
            position: relative;
            width: 100vw;
            height: 100vh;
            background-color: .000;
            display: flex;
            justify-content: center;
            overflow: hidden;
        }
        video{
            position: absolute;
            z-index: 10;
            /* height: 100%; */
            width: 100vw;
            background-color: aquamarine;
            height: auto;
        }
        .bottomController{
            z-index: 11;
            position: absolute;
            width: 100%;
            height: 10vmin;
            display: flex;
            flex-direction: column;
            align-items: center;
            bottom: 0;
        }
        .time{
            width: 100%;
            height: 4vmin;
            /* background-color: antiquewhite; */
            display: flex;
            align-items: center;
            justify-content: center;
            position: absolute;
            bottom: 10vmin;
        }
        .timelineAll{
            position: relative;
            display: flex;
            align-items: center;
            width: 100%;
            height: 5%;
            background-color: rgb(36, 36, 36);
        }
        .timelineAll:hover{
            height: 11%;
        }
        .timelineCurrent{
            position: absolute;
            left: 0;
            background-color: #fe7373;
            width: 0%;
            height: 100%;
        }
        
        .timehead{
            border-radius: 50%;
            position: absolute;
            left: 0%;
            background-color: #fe7373;
            width: 1.3vmin;
            height: 1.3vmin;
        }
        .timehead:hover{
            transform: scale(1.2);
        }
        .controller, .topController{
            position: absolute;
            width: 100%;
            height: 10vmin;
            /* background-color: antiquewhite; */
            display: flex;
            justify-content: space-between;
            z-index: 11;
        }
        .controller_left, .controller_right{
            /* background-color: aquamarine; */
            width: 20%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: space-evenly;
        }
        .controller_right{
            width: 16%;
        }
        .topController > .controller_left{
            width: 6%;
        }
        .playNpause, .stop, .prev, .next, .speed, .all, .back, .loopstart, .loopend{
            background-color: rgba(0, 255, 255, 0.342);
            width: 6vmin;
            height: 6vmin;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            transition: all 0.3s;
            font-size: 1.6vmin;
        }
        .play{
            position: absolute;
            border-top: 2.2vmin solid transparent;
            border-left: 4vmin solid #737373;
            border-bottom: 2.2vmin solid transparent;
        }
        .pause{
            display: none;
            position: absolute;
            background-color: #737373;
            width: 40px;
            height: 40px;
        }
        .prevNext{
            width: 13vmin;
            display: flex;
            justify-content: space-between;
        }
        .sound{
            background-color: rgba(0, 255, 255, 0.342);
            height: 6vmin;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            transition: all 0.3s;
            font-size: 1.6vmin;
        }
        .sound > p{
            width: 6vmin;
            text-align: center;
        }
        .soundlayout{
            display: flex;
            height: 6vmin;
            width: 0;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            transition: all 0.4s;
        }
        .soundbar{
            width: 100%;
            height: 5px;
            background-color: grey;
            position: relative;
            display: flex;
            align-items: center;
        }
        .current{
            width: 100%;
            height: 100%;
            background-color: #fe7373;
            position: absolute;
        }
        .sound__head{
            display: none;
            width: 1vmin;
            height: 1vmin;
            background-color: #fe7373;
            position: absolute;
            left: 100%;
            border-radius: 50%;
            pointer-events: none;
        }
        .viewportAll{
            width: 100%;
            height: 100%;
            z-index: 10;
            display: flex;
        }
        .left{
            width: 50%;
            height: 100%;
        }
        .right{
            width: 50%;
            height: 100%;
        }
    </style>
</head>
<body>
    <div class="player" ondragstart="return false">
        <video class="myplayer">
            <source src="<?=$row['v_url'].$row['video_name']?>.mp4">
        </video>
        <div class="viewportAll">
            <div class="left"></div>
            <div class="right"></div>
        </div>
        <!-- 상단 -->  
        <div class="topController con">
            
            <div class="controller_left">
                <div class="back">back</div>
            </div>
            <div class="controller_right"></div>
        </div>
        <!-- 하단 -->
        <div class="bottomController con">
            <div class="time">
                <div class="timelineAll">
                    <div class="timelineCurrent"></div>
                    <div class="timehead"></div>
                </div>
            </div>
        
            <div class="controller">
                <div class="controller_left">
                    <div class="playNpause">
                        <div class="play"></div>
                    </div>
                    <div class="prevNext">
                        <div class="prev">prev 10</div>
                        <div class="next">next 10</div>
                    </div>
                    <div class="stop">stop</div>
                    <div class="loopstart">loop start</div>
                    <div class="loopend">loopend</div>
                </div>
                <div class="controller_right">
                    <div class="sound">
                        <p>sound</p>
                            <div class="soundlayout">
                                <div class="soundbar">
                                    <div class="current"></div>
                                    <div class="sound__head"></div>
                                </div>
                            </div>
                    </div>
                    <div class="all">all</div>
                </div>
            </div>
        </div>
    </div>
    <script src="./player.js.js"></script>
</body>