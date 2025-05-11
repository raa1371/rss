<?php
$file = 'rss_data.json';

if (file_exists($file)) {
    $rssFeeds = json_decode(file_get_contents($file), true);
    if (!empty($rssFeeds)) {
        foreach ($rssFeeds as $company => $feeds) {
            echo "<li><strong>" . $company . "</strong><br>";
            echo "مناقصه: <a href='" . $feeds['tender'] . "'>مشاهده</a><br>";
            echo "مزایده: <a href='" . $feeds['auction'] . "'>مشاهده</a><br>";
            echo "اولویت پژوهشی: <a href='" . $feeds['research'] . "'>مشاهده</a></li><br>";
        }
    } else {
        echo "هیچ RSSی ثبت نشده است.";
    }
} else {
    echo "فایل ذخیره‌سازی وجود ندارد.";
}
?>
