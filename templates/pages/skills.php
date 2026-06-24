<section class="ag-section">
    <div class="ag-container">
        <h2>Technical Skills & Expertise</h2>
        <p class="ag-lead">Modern tools and technologies I use daily to build robust digital solutions.</p>

        <?php foreach ($skills as $category => $items): ?>
            <div class="ag-mb-4">
                <h4 class="ag-text-primary"><?= esc($category) ?></h4>
                <div class="ag-tags">
                    <?php foreach ($items as $item): ?>
                        <span class="ag-tag ag-tag-primary"><?= esc($item) ?></span>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>

        <!-- Core Technologies Highlight -->
        <div class="ag-mt-5">
            <h4>Core Technologies</h4>
            <div class="ag-tags">
                <span class="ag-tag ag-tag-dark">PHP</span>
                <span class="ag-tag ag-tag-dark">Laravel</span>
                <span class="ag-tag ag-tag-dark">JavaScript</span>
                <span class="ag-tag ag-tag-dark">React.js</span>
                <span class="ag-tag ag-tag-dark">Node.js</span>
                <span class="ag-tag ag-tag-dark">MongoDB</span>
                <span class="ag-tag ag-tag-dark">MySQL</span>
                <span class="ag-tag ag-tag-dark">WordPress</span>
                <span class="ag-tag ag-tag-dark">Antigravity</span>
            </div>
        </div>
    </div>
</section>