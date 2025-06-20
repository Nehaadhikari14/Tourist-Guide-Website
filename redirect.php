<?php
$page = strtolower(trim($_GET['page']));

switch ($page) {
    case "home":
        header("Location: index.php#home");
        break;
    case "services":
        header("Location: index.php#services");
        break;
    case "about":
        header("Location: index.php#about");
        break;
    case "gallery":
        header("Location: index.php#gallery");
        break;
    case "contact":
    case "contact us":
        header("Location: index.php#contact");
        break;
    default:
        header("Location: index.php");
        break;
}
exit();
?>


