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
            <loc><?=base_url()?>projects</loc>
            <lastmod><?=$mod?></lastmod>
            <priority>0.80</priority>
        </url>
        <url>
            <loc><?=base_url()?>media</loc>
            <lastmod><?=$mod?></lastmod>
            <priority>0.80</priority>
        </url>
        <url>
            <loc><?=base_url()?>events</loc>
            <lastmod><?=$mod?></lastmod>
            <priority>0.80</priority>
        </url>
        <url>
            <loc><?=base_url()?>privacy-policy</loc>
            <lastmod><?=$mod?></lastmod>
            <priority>0.80</priority>
        </url>
        <url>
            <loc><?=base_url()?>products</loc>
            <lastmod><?=$mod?></lastmod>
            <priority>0.80</priority>
        </url>
        <url>
            <loc><?=base_url()?>services</loc>
            <lastmod><?=$mod?></lastmod>
            <priority>0.80</priority>
        </url>

    <?php foreach($data as $d){?>
        <url>
            <loc><?=base_url('event/').$d->id.'/'.$d->slug?>/</loc>
            <priority>0.80</priority>
            <changefreq>daily</changefreq>
        </url>
    <?php }?>

    <?php foreach($data2 as $d2){?>
        <url>
            <loc><?=base_url('Project/').$d2->id?>/</loc>
            <priority>0.80</priority>
            <changefreq>daily</changefreq>
        </url>
    <?php }?>

</urlset>


