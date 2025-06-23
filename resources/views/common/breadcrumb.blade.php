<div class="w-full bg-gray-100 py-2 px-10 flex flex-wrap justify-between text-bold items-center text-[14px]">
    <div class="left-content push-left">
        <div id="breadcam" role="navigation" aria-label="breadcrumb">
            <ul class="breadcrumbs" style="list-style: none; display: flex; gap: 5px; padding: 0; margin: 0;">
                <li>
                    <a href="{{ url('/') }}" class="home"><span class="text-bold">Home</span></a>
                </li>
                <li class="current text-bold">
                    {{ $breadcrumbTitle ?? 'Page Title' }}
                </li>
            </ul>
        </div>
    </div>
    <div class="right-content push-right">
        <div class="printShare">
            <ul style="list-style: none; display: flex; gap: 8px; padding: 0; margin: 0;">
                <li>
                    <a href="#" onclick="window.print();" id="print" title="Print Page Content" aria-label="Print Page Content">
                        <span class="icon-printer"></span> <span class="off-css">Print</span>
                    </a>
                </li>
                <li>
                    <span class="share-text">
                        <em class="icon-share"></em><span class="off-css">Share</span>
                    </span>
                </li>
                <li>
                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(Request::url()) }}&amp;t={{ urlencode($breadcrumbTitle ?? 'Page Title') }}"
                       onclick="window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"
                       target="_blank" title="Share on Facebook" aria-label="Facebook that opens in a new window" rel="noopener noreferrer">
                        <span class="icon-facebook"></span><span class="off-css">Facebook</span>
                    </a>
                </li>
                <li>
                    <a href="https://twitter.com/share?url={{ urlencode(Request::url()) }}&amp;via=TWITTER_HANDLE&amp;text={{ urlencode($breadcrumbTitle ?? 'Page Title') }}"
                       onclick="window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"
                       target="_blank" title="Share on Twitter" aria-label="Twitter that opens in a new window" rel="noopener noreferrer">
                        <span class="icon-twitter"></span><span class="off-css">Twitter</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
