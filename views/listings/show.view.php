<?php loadPartial('head'); ?>
<?php loadPartial('navbar'); ?>
<?php loadPartial('top-banner'); ?>
<?php if ($listing) : ?>
    <section>
        <div class="container mx-auto p-4 mt-4">
            <div class="rounded-lg shadow-md bg-white p-6">
                <h2 class="text-3xl font-bold mb-4"><?= $listing->title ?></h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <p class="text-gray-700 text-lg mb-4">
                            <?= $listing->description ?>
                        </p>
                        <ul class="bg-gray-100 p-4 rounded mb-6">
                            <li class="mb-2"><strong>Salary:</strong> <?= formatSalary($listing->salary) ?></li>
                            <li class="mb-2"><strong>Location:</strong> <?= $listing->city ?>, <?= $listing->state ?></li>
                            <li class="mb-2"><strong>Tags:</strong> <?= $listing->tags ?></li>
                        </ul>
                    </div>
                </div>
                <a href="/listings" class="inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                    Back To Listings
                </a>
            </div>
        </div>
    </section>
<?php else : ?>
    <section class="container mx-auto p-4 mt-4 text-center">
        <h2 class="text-2xl font-bold text-red-500">Listing Not Found</h2>
        <a href="/listings" class="text-blue-500 hover:underline">Back to Listings</a>
    </section>
<?php endif; ?>

<?php loadPartial('bottom-banner'); ?>
<?php loadPartial('footer'); ?>