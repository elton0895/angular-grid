<?php
$key = "index";
$pageTitle = "Angular Grid Documentation";
$pageDescription = "Introduction page of documentation for Angular Grid";
$pageKeyboards = "AngularJS Angular Grid Documentation";
include 'documentation_header.php';
?>

<div style="border: 1px solid darkgrey; background-color: #eee; padding: 10px; margin: 30px 5px 5px 5px;"
     xmlns="http://www.w3.org/1999/html">

    <p>
        <b>21th June 2015</b>
    </p>

    <p>
        This is what I did last week:
    <ul>

        <li>
            <b>Showing / hiding columns</b> and <b>data pivoting</b> is here!!! See it in action on the
            <a href="/example.html">test drive</a>, or read about it in the new
            <a href="/angular-grid-tool-panel/index.php">toolbar panel</a>.
        </li>
        <li>
            <b>Enhanced Grouping:</b> To get the automatic pivoting working, I had to do some redesign
            on how group columns worked. If you are grouping, now the grid provides a group column by default.
            To remove this (ie keep your old design), just add 'groupSuppressAutoColumn = true' to your grid options.
            However check out <a href="/angular-grid-grouping/index.php">grouping page</a> to learn how it's done now.
        </li>
        <li>
            <b>Non Breaking Change: </b>
            The following name changes have happened, so best you change. However if wrong, a warning gets printed to the
            console (ie the old way still works). Changes are:
            <ul>
                <li>
                    groupInnerRenderer is now called groupRowInnerRenderer. To avoid confusion, as it only works when grouping using rows.
                </li>
                <li>
                    colDef.group and colDef.groupShow are now colDef.headerGroup and colDef.headerGroupShow (so not to get mixed up with row grouping).
                </li>
            </ul>
        </li>

        <li>
            <b>Released 1.10.0</b> - contains all the above.
        </li>

    </ul>

    <p>
        This is what I'm doing this week:
    </p>

    <ul>
        <li>
            The first pass of the tool panel took a LOT of work. I had to refactor and rewrite large chunks of the code.
            However the foundations are laid for a great grid going forward. Next up - I'll be working more on the tool panel
            (such as saving / restoring column order and grouping).
        </li>
    </ul>

    <p>
        I have no blockers.
    </p>

    <a href="https://twitter.com/angularGrid" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @angularGrid</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
</div>

<!--<div style="text-align: center; padding: 20px;;">
<span style="border: 2px solid darkblue; padding: 10px; font-size: 14px; display: inline-block;">
    <p>
        <img src="images/panda.png"/>
        <b>15th June 2015</b>
        <img src="images/panda.png"/>
    </p>
    <p>
        Two small bugs found in 1.9.0 (issues with 'soft refresh' and 'setSortModel').
        Both of these fixed in 1.9.2.
    </p>
</span>
</div>-->

<div style="text-align: center; margin-top: 50px;">
    <div style="border: 1px solid lightgrey; display: inline-block; padding-right: 10px;">

        <!-- Begin MailChimp Signup Form -->
        <link href="//cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css">
        <style type="text/css">
            #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
            /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
               We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
        </style>

        <div id="mc_embed_signup">
            <form action="//angulargrid.us11.list-manage.com/subscribe/post?u=9b44b788c97fa5b498fbbc9b5&amp;id=8b9aa91988"
                  method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                <div id="mc_embed_signup_scroll">
                    <div style="text-align: center; padding-bottom: 5px;">
                        Join the mailing list to get updates of new features and releases
                    </div>
                    <table>
                        <tr>
                            <td style="padding: 4px;">
                                <i class="fa fa-envelope"></i>
                            </td>
                            <td style="padding: 4px;">
                                <input style="width: 200px" placeholder="Email Address..." type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
                            </td>
                            <td style="padding: 4px;">
                                <i class="fa fa-user" style="padding-left: 4px;"></i>
                            </td>
                            <td style="padding: 4px;">
                                <input style="width: 200px" placeholder="First Name" type="text" value="" name="FNAME" class="" id="mce-FNAME">
                            </td>
                        </tr>
                        <tr>
                            <td>
                            </td>
                            <td>
                            </td>
                            <td>
                            </td>
                            <td style="padding: 4px;">
                                <input style="width: 200px" placeholder="Last Name" type="text" value="" name="LNAME" class="" id="mce-LNAME">
                            </td>
                        </tr>
                    </table>
                    <div id="mce-responses" class="clear">
                        <div class="response" id="mce-error-response" style="display:none"></div>
                        <div class="response" id="mce-success-response" style="display:none"></div>
                    </div>
                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div style="position: absolute; left: -5000px;"><input type="text" name="b_9b44b788c97fa5b498fbbc9b5_8b9aa91988" tabindex="-1" value=""></div>
                    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                </div>
            </form>
        </div>
        <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
        <!--End mc_embed_signup-->

    </div>
</div>


<div style="text-align: center; margin: 50px;">
    <div style="border: 1px solid lightgrey; display: inline-block; padding: 10px;">
        <div style="padding-bottom: 10px">
            Has the grid helped? Please donate to show your support and appreciation. Thanks.
        </div>
        <div>
            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----">
                <input type="image" src="https://www.paypalobjects.com/en_US/GB/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal � The safer, easier way to pay online.">
                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
            </form>
        </div>
    </div>
</div>

<div style="padding: 20px; margin: 5px;">

    <div style="text-align: center; font-weight: bold;">

        <div style="display: inline-block; width: 40%;">
            Star or Watch <br/>
                <iframe src="https://ghbtns.com/github-btn.html?user=ceolter&repo=angular-grid&type=star&count=true&size=large"
                        frameborder="0" scrolling="0" width="160px" height="30px">
                </iframe>
                <iframe src="https://ghbtns.com/github-btn.html?user=ceolter&repo=angular-grid&type=watch&count=true&size=large&v=2"
                        frameborder="0" scrolling="0" width="160px" height="30px">
                </iframe>
        </div>

        <div style="display: inline-block; vertical-align: top; width: 25%;">
            Say You Use <br/>
                <a href="http://ngmodules.org/modules/angular-grid" style="color: black; border: 1px solid darkgrey; background-color: lightgrey; padding: 2px;">
                    A<span style="color: darkred">ng</span>ular Modules
                </a>
        </div>

        <div style="display: inline-block; vertical-align: top; width: 30%;">

            Tell Friends<br/>

                <a class='share-link' href="https://www.facebook.com/sharer/sharer.php?u=www.angulargrid.com">
                    <img src="/images/facebook_32.png" alt="Share on Facebook" title="Share on Facebook"/>
                </a>

                <a class='share-link' href="https://twitter.com/home?status=Check%20out%20AngularGrid,%20a%20new%20way%20to%20show%20grid%20data%20for%20AngularJS">
                    <img src="/images/twitter_32.png" alt="Share on Twitter" title="Share on Twitter"/>
                </a>

                <a class='share-link' href="https://plus.google.com/share?url=www.angulargrid.com">
                    <img src="/images/googleplus_32.png" alt="Share on Google Plus" title="Share on Google Plus"/>
                </a>

                <a class='share-link' href="https://www.linkedin.com/shareArticle?mini=true&url=www.angulargrid.com&title=Angular%20Grid&summary=A%20new%20way%20to%20show%20grid%20data%20for%20AngularJS&source=">
                    <img src="/images/linkedin_32.png" alt="Share on LinkedIn" title="Share on LinkedIn"/>
                </a>

        </div>
    </div>

</div>

<div style="padding: 20px;">

    <h3>
        News
    </h3>


    <p>
        <b>14th June</b> Server side sorting and filtering, headerValueGetter, newRowsAction, suppressUnSort & suppressMultiSort'.
    </p>

    <p>
        <b>7th June</b> New features: Ensure Col Index Visible, No Isolated Scope, API for Sorting,
        API for Saving / Setting Filters
    </p>

    <p>
        <b>31st May</b> New features: Default aggregation, filtering API, de-selection, foeEachInMemory.
    </p>

    <hr/>

    <p>
        <b>25th May</b> Keyboard Navigation and general improvements
    </p>

    <hr/>

    <p>
        <b>17th May</b> Revamp of Grouping, ensureIndexVisible, ensureNodeVisible, Multi Column Sort (thanks Dylan Robinson), Fixed Width Cols.
    </p>

    <hr/>

    <p>
        <b>26 April</b> - Volatile Columns, Soft Refresh, Cell Templates.
    </p>

    <hr/>

    <p>
        <b>25 April</b> - Bug fixes:
        <a href="https://github.com/ceolter/angular-grid/issues/35">Pinned Blank Space</a>,
        <a href="https://github.com/ceolter/angular-grid/issues/91">Group Sorting</a>,
        <a href="https://github.com/ceolter/angular-grid/issues/90">Cell Templates</a>,
        <a href="https://github.com/ceolter/angular-grid/issues/29">Expand / Collapse</a>
    </p>

    <hr/>

    <p>
        <b>20 April</b> - Value Getters, Context and Expressions. Will be available in 1.3, or take latest.
        All documented in relevant sections.
    </p>

    <hr/>

    <p>
        <b>18 April</b> - Gulp! Thank you Tanner Linsley for implementing Gulp.
    </p>

    <hr/>

    <p>
        <b>16 April</b> - Checked in column opening & closing column Groups. Now you can show and hide columns in groups.
        Will be available in 1.3, or take latest. Documentation page 'Grouping Headers' updated.
    </p>

    <hr/>

    <p>
        <b>13 April</b> - Checked in 'tab navigation for editing', so when you hit tab while editing a cell, it goes into
        editing the next cell. Will be available in 1.3, or take latest.
    </p>

    <hr/>

    <p>
        <b>12 April</b> - Checked in datasources, pagination, virtual paging, infinite scrolling. Will be available in 1.3, or take latest. Documentation
        pages 'Datasource', 'Pagination' and 'Virtual Paging' created.
    </p>

    <hr/>

    <p>
        <b>09 April</b> - Checked in support for 'Refresh Aggregate Data'. Will be available in 1.3, or take latest. Documentation
        page 'Grouping and Aggregating Rows' updated.
    </p>

    <hr/>

    <p>
        <b>06 April</b> - Checked in support for 'Loading Panel' to show when fetching data. Will be available in 1.3, or take latest. Documentation
        page for loading created.
    </p>

    <hr/>

    <p>
        <b>05 April</b> - Checked in support for custom icons in the headers. Will be available in 1.3, or take latest. Documentation
        page for icons created.
    </p>

    <hr/>

    <p>
        <b>04 April</b> - Checked in support for footers while grouping. Will be available in 1.3, or take latest. Documentation
        for grouping and example in 'test drive' updated to show.
    </p>

    <hr/>

    <p>
        <b>31 March</b> - DailyJS covers launch of Angular Grid.
    </p>

</div>

<?php include 'documentation_footer.php';?>
