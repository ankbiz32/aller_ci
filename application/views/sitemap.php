<?php echo '<?xml version="1.0" encoding="UTF-8"?>';
    $mod=date('Y-m-d');  
?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
        xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
        xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 
        http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">

        <url>
            <loc><?=base_url()?></loc>
            <lastmod><?=$mod?></lastmod>
            <priority>1.00</priority>
        </url>
        <url>
            <loc><?=base_url()?>about-us</loc>
            <lastmod><?=$mod?></lastmod>
            <priority>0.80</priority>
        </url>
        <url>
            <loc><?=base_url()?>contact</loc>
            <lastmod><?=$mod?></lastmod>
            <priority>0.80</priority>
        </url>
        <url>
            <loc><?=base_url()?>services</loc>
            <lastmod><?=$mod?></lastmod>
            <priority>0.80</priority>
        </url>
        <url>
            <loc><?=base_url()?>training</loc>
            <lastmod><?=$mod?></lastmod>
            <priority>0.80</priority>
        </url>


</urlset>


