<?php

do_action('legit_news_doctype');

?>

<head>
	<?php

	do_action('legit_news_before_wp_head');

	wp_head();
	?>
</head>

<body <?php body_class(); ?>>

	<!-- <div class="header">
		<div class="menu">
			<ul class="navbar">
				<li class="nav-item">Chính trị</li>
				<li class="nav-item">Xã hội</li>
				<li class="nav-item">Thế giới </li>
				<li class="nav-item">Kinh tế</li>
				<li class="nav-item">Thể thao </li>
				<li class="nav-item">Văn hóa</li>
				<li class="nav-item">Giải trí</li>
				<li class="nav-item">Pháp luật</li>
				<li class="nav-item">Du lịch</li>
				<li class="nav-item">Quân sự - Quốc phòng</li>
				<li class="nav-item">Sức khỏe</li>
				<li class="nav-item">Đời sống</li>
				<li class="nav-item">Podcast</li>
			</ul>
		</div>
	</div> -->

	<?php do_action('wp_body_open'); ?>

	<?php

	do_action('legit_news_page_start_action');

	do_action('legit_news_before_header');

	do_action('legit_news_header_action');


	do_action('legit_news_content_start_action');


	do_action('legit_news_header_image_action');

	if (legit_news_is_frontpage()) {

		$sorted = array('breaking_news', 'hero_post', 'must_read', 'main_post', 'related_post');

		foreach ($sorted as $section) {
			if ($section == 'main_post' || $section == 'hero_post') {
				add_action('dark_legit_news_primary_content', 'next_legit_news_add_' . $section . '_section');
			} else {
				add_action('dark_legit_news_primary_content', 'legit_news_add_' . $section . '_section');
			}
		}

		do_action('dark_legit_news_primary_content');
	}
