<?php
/**
 * Created by PhpStorm.
 * User: DMF
 * Date: 2017/12/20
 * Time: 15:28
 */

?>

<head>
        <title>微信水果商城</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

        <link rel="stylesheet" href="../../../static/public/css/weui.min.css">
        <link rel="stylesheet" href="../../../static/public/css/jquery-weui.css">
        <style>
                html,body{
                        background-color: #cec4ba;
                }
                 .bar-nav {
                         top: 0;
                 }
                .bar {

                        right: 0;
                        left: 0;
                        z-index: 10;
                        height: 2.2rem;
                        padding-right: 0.5rem;
                        padding-left: 0.5rem;
                        background-color: #f7f7f8;
                        -webkit-backface-visibility: hidden;
                        backface-visibility: hidden;
                }
                .bar .button-nav.pull-left {
                        margin-left: -0.25rem;
                }
                .bar .button.pull-left {
                        margin-right: 0.5rem;
                }
                .bar .button-link {
                        top: 0;
                        padding: 0;
                        font-size: 0.8rem;
                        line-height: 2.2rem;
                        height: 2.2rem;
                        color: #0894ec;
                        border: 0;
                }
                .bar .button {
                        position: relative;
                        z-index: 20;
                        margin-top: 0;
                        font-weight: 400;
                }
                .button {
                        border: 1px solid #0894ec;
                        color: #0894ec;
                        text-decoration: none;
                        text-align: center;
                        display: block;
                        border-radius: 0.25rem;
                        line-height: 1.25rem;
                        box-sizing: border-box;
                        -webkit-appearance: none;
                        -moz-appearance: none;
                        -ms-appearance: none;
                        appearance: none;
                        background: none;
                        padding: 0 0.5rem;
                        margin: 0;
                        height: 1.35rem;
                        white-space: nowrap;
                        position: relative;
                        text-overflow: ellipsis;
                        font-size: 0.7rem;
                        font-family: inherit;
                        cursor: pointer;
                }
                .pull-left {
                        float: left;
                }

                .bar .button .icon {
                        padding: 0;
                }
                .bar .icon {
                        position: relative;
                        z-index: 20;
                        padding: .5rem .1rem;
                        font-size: 1rem;
                        line-height: 1.2rem;
                }
                .icon {
                        font-family: "iconfont-sm" !important;
                        font-style: normal;
                        display: inline-block;
                        vertical-align: middle;
                        background-size: 100% auto;
                        background-position: center;
                        -webkit-font-smoothing: antialiased;
                        -webkit-text-stroke-width: 0.2px;
                        -moz-osx-font-smoothing: grayscale;
                }
        </style>
        <script src="../../../static/public/js/jquery-3.2.1.min.js"></script>
</head>
<header class="bar bar-nav">
        <a class="button button-link button-nav pull-left back" href="/home/index/person">
                &lt;返回
        </a>

        <h1 class="title" style="text-align: center;"></h1>
</header>