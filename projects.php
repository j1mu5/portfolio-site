<?php

$projects = array(
	array(
		"projectTitle" => "Meme Generator",
		"techUsed" => ['HTML', 'CSS', 'JavaScript', 'React', 'API'],
		"liveSite" => "https://quirky-poincare-ae80a8.netlify.app/",
		"repo" => "https://github.com/j1mu5/memegenerator"),
	array(
		"projectTitle" => "Javascript Calculator",
		"techUsed" => ['HTML', 'CSS', 'JavaScript', 'React'],
		"liveSite" => "https://j1mu5.github.io/frontend-calculator/",
		"repo" => "https://github.com/j1mu5/frontend-calculator"),
	array(
		"projectTitle" => "Frontend Mentor - Social Media Dashboard",
		"techUsed" => ['HTML', 'CSS', 'JavaScript', 'React'],
		"liveSite" => "https://j1mu5.github.io/social-media-dashboard/",
		"repo" => "https://github.com/j1mu5/social-media-dashboard"),
	array(
		"projectTitle" => "Frontend Mentor - Ping coming soon page",
		"techUsed" => ['HTML', 'CSS'],
		"liveSite" => "https://j1mu5.github.io/ping-coming-soon-page/",
		"repo" => "https://github.com/j1mu5/ping-coming-soon-page"),
	array(
		"projectTitle" => "Picture in Picture",
		"techUsed" => ['HTML', 'CSS', 'Javascript'],
		"liveSite" => "https://j1mu5.github.io/picture-in-picture/",
		"repo" => "https://github.com/j1mu5/picture-in-picture"),
	array(
		"projectTitle" => "Infinite Scroll",
		"techUsed" => ['HTML', 'CSS', 'Javascript', 'API'],
		"liveSite" => "https://j1mu5.github.io/infinite-scroll/",
		"repo" => "https://github.com/j1mu5/infinite-scroll"),
	array(
		"projectTitle" => "Robofriends",
		"techUsed" => ['HTML', 'CSS', 'JavaScript', 'React'],
		"liveSite" => "https://hopeful-wozniak-e9cba9.netlify.app/",
		"repo" => "https://github.com/j1mu5/robofriends"),
	array(
		"projectTitle" => "Tyre Price Calculator",
		"techUsed" => ['HTML', 'CSS', 'JavaScript', 'Bulma'],
		"liveSite" => "https://j1mu5.github.io/tyre-price-calculator/",
		"repo" => "https://github.com/j1mu5/tyre-price-calculator"),
	array(
		"projectTitle" => "Etch A Sketch Clone",
		"techUsed" => ['HTML', 'CSS', 'JavaScript'],
		"liveSite" => "https://j1mu5.github.io/etch-a-sketch-clone/",
		"repo" => "https://github.com/j1mu5/etch-a-sketch-clone"),
	array(
		"projectTitle" => "Gradient Background Generator",
		"techUsed" => ['HTML', 'CSS', 'JavaScript'],
		"liveSite" => "https://j1mu5.github.io/Background-Generator/",
		"repo" => "https://github.com/j1mu5/Background-Generator"),
	array(
		"projectTitle" => "Frontend Mentor - Single Price Grid Component",
		"techUsed" => ['HTML', 'CSS'],
		"liveSite" => "https://j1mu5.github.io/single-price-grid-component/",
		"repo" => "https://github.com/j1mu5/single-price-grid-component"),
	array(
		"projectTitle" => "Frontend Mentor - Four Card Feature Section",
		"techUsed" => ['HTML', 'CSS'],
		"liveSite" => "https://j1mu5.github.io/four-card-feature-section/",
		"repo" => "https://github.com/j1mu5/four-card-feature-section"),
);

// array(
//   "projectTitle"  => "Code Player",
//   "techUsed"      => "HTML CSS jQuery",
//   "liveSite"      => "https://j1mu5.github.io/code-player/",
//   "repo"          => "https://github.com/j1mu5/code-player"),

?>

<!-- PORTFOLIO -->
<div class="container-fluid" id="projects">
    <div class="container p-5">
        <h1 class="display-5 fw-bold my-logo text-center gradient-text heading-ani animate__animated ">Portfolio</h1>
        <div class="d-flex w-100 flex-wrap justify-content-evenly">

			<?php foreach ($projects as $project) { ?>
                <div class="card m-4 grow grow:hover rounded-3 shadow-lg project-box w-25 p-2" style="min-width: 300px">
                    <div class="card-body d-flex flex-column justify-content-center">
                        <h5 class="card-title my-logo text-center"><?php echo $project['projectTitle']; ?></h5>

                        <div class="tags d-inline text-center my-3">
							<?php foreach ($project['techUsed'] as $tag) : ?>
                                <span class="badge rounded-pill bg-dark text-center"><?php echo $tag; ?></span>
							<?php endforeach; ?>
                        </div>
                        <h1 class="text-center text-dark">
                            <a href="<?php echo $project['liveSite'] ?>" target="_blank"><i
                                        class="bi bi-globe2 m-1 text-dark project-link"></i></a>
                            <a href="<?php echo $project['repo'] ?>" target="_blank"><i
                                        class="bi bi-github m-1 text-dark"></i></a>
                        </h1>
                    </div>
                </div>
			<?php }; ?>
        </div>
    </div>
</div>
