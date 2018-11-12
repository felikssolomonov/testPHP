<?php
    $heading = 'It is my first shablon on php';
    $footing = 'Copyright &copy 2018';

    $arrMenu = array(   "mainPage"    =>  "Главная",
                        "aboutUs"    =>  "О нас",
                        "feedback"    =>  "Обратная связь",
                        "portfolio"    =>  "Портфолио",
                        "registration"    =>  "Регистрация",
                        "login"    =>  "Вход",
                        "plugin"    =>  "Плагин",
                        "news"      =>  "Новости");

    //max size 14
    $arrSidebar = array("mainPage"    =>  "Главная",
                        "pictures"    =>  "Картинки",
                        "video"    =>  "Видео",
                        "groups"    =>  "Группы",
                        "music"    =>  "Музыка",
                        "friends"    =>  "Друзья",
                        "messages"    =>  "Сообщения",
                        "bookmarks"      =>  "Закладки");

    class news_pages {
        var $index;
        var $name;
        var $contentMini;
        var $contentFull;

        function news_pages($indexI, $nameN, $contentMiniM, $contentFullF){
            $this->index = $indexI;
            $this->name = $nameN;
            $this->contentMini = $contentMiniM;
            $this->contentFull = $contentFullF;
        }

        function get_index(){
            echo $this->index;
        }

        function get_name(){
            echo $this->name;
        }

        function get_mini(){
            echo $this->contentMini;
        }

        function get_full(){
            echo $this->contentFull;
        }
    }

//    $obj = new news_pages();
     $arrNews = array(   new news_pages(0, "name0", "contentMini0", "contentFull0"),
                        new news_pages(1, "name1", "contentMini1", "contentFull1"),
                        new news_pages(2, "name2", "contentMini2", "contentFull2"),
                        new news_pages(3, "name3", "contentMini3", "contentFull3"),
                        new news_pages(4, "name4", "contentMini4", "contentFull4"));







