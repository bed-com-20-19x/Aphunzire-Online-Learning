<?php
require_once("iclude/initialize.php");
if (!isset($_SESSION['StudentID'])){
    #code
    redirect('login.php');
}
$content='home.php';
$view=(isset($_GET['q']) && $_GET['q'] !='') ? $_GET['q'] : '';

switch ($view) {
    case 'lesson' :
        $title = "Lesson";
        $content = 'lesson.php';

        #coding
        break;
        case 'exercises' :
            $title = "Exercises";
            $content = 'exercises.php';

        #coding
        break;
        case 'download' :
            $title = "Download";
            $content = 'download.php';
            
            #Coding
            break;
            case 'about' :
                $title = "About Us"; 
                $content = "about.php";

                #coding
                break;
                case 'playvideo' :
                    $title = "paly video";
                    $content = 'palyvideo.php';

                    #coding
                    break;
                    case 'viewpdf' :
                    $title = "play video";
                    $content = 'viewpdf.php';

                    #coding
                    break;
                    case 'question' :
                        $title = "Question";
                        $content = 'question.php';

                        #coding
                        break;
                        case 'quizresult' :
                            $title = "Result";
                            $content = 'quizresult.php';

                            #coding
                            break;
                            default :
                            $title = "Home";
                            $content = 'home.php';


}
require_once("navigation/navigations.php");
?>