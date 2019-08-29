<?php
/**
 * Include files for developer's documentation section
 */
?>

<div class="row show-grid clear-both">
    <div class="col-md-8 col-sm-8">
        <h1>Docs for Developers</h1>
        <p>MantisBT <a href="https://github.com/mantisbt/mantisbt">source code</a>
            and <a href="https://github.com/mantisbt/mantisbt-plugins">plugins</a>
            are hosted on GitHub.
            Detailed information on how to use Git with MantisBT can be found in the
            Mantis Bug Tracker Developers Guide, and the MantisBT Wiki provides various
            links and resources for MantisBT contributors.
            Help with setting up Git and learning basic usage can be found in GitHub's Help pages.
        </p>

        <ul class="icons item-details">
            <li>
                <i class="icon-book"></i>
                <a href="<?php echo $g_docs_url, $g_docs_path, $g_docs_dev_guide; ?>">
                    Developer's Guide
                </a>
            </li>
            <li>
                <i class="icon-cog"></i>
                <a href="https://documenter.getpostman.com/view/29959/mantis-bug-tracker-rest-api/7Lt6zkP">
                    REST API Reference
                </a>
            </li>
            <li>
                <i class="icon-book"></i>
                <a href="<?php echo $g_wiki_url; ?>doku.php/mantisbt:developers_corner">
                    Developer's Corner
                </a>
                in the MantisBT Wiki
            </li>
            <li>
                <i class="icon-sitemap"></i>
                <a href="<?php echo $g_docs_url, $g_docs_erd_path; ?>latest.pdf">
                    Entity-Relationship Diagram
                </a>
                (<a href="<?php echo $g_docs_url, $g_docs_erd_path; ?>">
                    older versions
                </a>)
            </li>
            <li>
                <i class="icon-github"></i>
                <a href="https://help.github.com">GitHub Help</a>
            </li>
        </ul>
    </div>
    <div class="col-md-1 col-sm-1"></div>
    <div class="col-sm-3 col-md-3 note-stick stick pull-right">
        <div style="font-size: 32px;">
            <i class="icon-book"></i>
        </div>
        <br>
        <h2>Developer's Guide</h2>
        <br>
        <a href="<?php echo $g_docs_url, $g_docs_path, $g_docs_dev_guide; ?>/html-desktop/"
           onclick="ga('send', 'event', 'Documentation', 'Browse Dev Docs');" type="button"
           class="ex btn btn-default btn-inverse btn-block">
            Browse Docs
        </a>
        <a href="<?php echo $g_docs_url, $g_docs_path, $g_docs_dev_guide, "/$g_docs_dev_guide.pdf"; ?>"
           onclick="ga('send', 'event', 'Documentation', 'Download Dev PDF');" type="button"
           class="ex btn btn-default btn-inverse btn-block">
            Download PDF
        </a>
    </div>
</div>
