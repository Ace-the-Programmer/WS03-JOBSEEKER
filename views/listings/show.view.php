<?php loadPartial('head'); ?>
<?php loadPartial('navbar'); ?>
<?php loadPartial('showcase-search'); ?>
<?php loadPartial('top-banner'); ?>

<section>
    <div class="container mx-auto p-4 mt-4">
        <div class="rounded-lg shadow-md bg-white p-6">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-3xl font-bold"><?= $listing->title ?></h2>
                <a href="/listings" class="text-blue-500 hover:underline">
                    <i class="fa fa-arrow-left"></i> Back to Listings
                </a>
            </div>
            <div class="p-4 bg-gray-100 rounded mb-6">
                <h4 class="text-lg font-semibold mb-2">Job Description</h4>
                <p class="text-gray-700 text-lg">
                    <?= $listing->description ?>
                </p>
            </div>
            <ul class="my-4 bg-gray-100 p-4 rounded">
                <li class="mb-2"><strong>Salary:</strong> <?= formatSalary($listing->salary) ?></li>
                <li class="mb-2">
                    <strong>Location:</strong> <?= $listing->city ?>, <?= $listing->state ?>
                    <span class="text-xs bg-blue-500 text-white rounded-full px-2 py-1 ml-2">Local</span>
                </li>
                <li class="mb-2">
                    <strong>Tags:</strong> <?= $listing->tags ?>
                </li>
            </ul>
            <div class="mt-6">
                <a href="mailto:<?= $listing->email ?>" class="block w-full text-center px-5 py-2.5 shadow-sm rounded border text-base font-medium text-white bg-blue-600 hover:bg-blue-700">
                    Apply Now
                </a>
            </div>
        </div>
    </div>
</section>

<?php loadPartial('bottom-banner'); ?>
<?php loadPartial('footer'); ?>