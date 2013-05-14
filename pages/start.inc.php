<div class="rex-addon-output">
  <div class="rex-addon-content">
    <div class="rexseo">
     <div id="quickstart">
<h2>Usage and examples</h2>
<br />
<p>Use <pre><code>$REX['MOBILE']</code></pre> to get the basic mobile device <pre><code>phone, tablet, computer</code></pre> or detect by yourself:
<hr />
<p>Basic usage, looking for mobile devices or tablets:</p>

<pre><code>&lt;?php
if($REX['MOBILE_DETECT']-&gt;isMobile()){
  // Any mobile device.
}
</code></pre>
<br />
<pre><code>&lt;?php
if($REX['MOBILE_DETECT']-&gt;isTablet()){
  // Any tablet device.
}
</code></pre>
<hr />
<p>Check for a specific platform with the help of the magic methods:</p>

<pre><code>&lt;?php
if($REX['MOBILE_DETECT']-&gt;isiOS()){
  // Code to run for the Apple's iOS platform.
}</code></pre>
<br />
<pre>&lt;?php
if($REX['MOBILE_DETECT']-&gt;isAndroidOS()){
  // Code to run for the Google's Android platform.
}</code>
</pre>

<p>Other case insensitive available methods are <code>isIphone()</code>, <code>isIpad()</code>, <code>isBlackBerry()</code>, <code>isKindle()</code>, <code>isOpera()</code>, etc.
<hr />
<p>Alternative method <code>is()</code> for checking specific properties (in beta):</p>

<pre><code>&lt;?php
$REX['MOBILE_DETECT']-&gt;is('Chrome')
$REX['MOBILE_DETECT']-&gt;is('iOS')
$REX['MOBILE_DETECT']-&gt;is('UC Browser')
[...]</code>
</pre>
<hr />
<p>Batch mode using <code>setUserAgent()</code>:</p>

<pre><code>&lt;?php
$userAgents = array(
'Mozilla/5.0 (Linux; Android 4.0.4; Desire HD Build/IMM76D) AppleWebKit/535.19 (KHTML, like Gecko)<br />Chrome/18.0.1025.166 Mobile Safari/535.19',
'BlackBerry7100i/4.1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 VendorID/103',
[...]
);
foreach($userAgents as $userAgent){
  $REX['MOBILE_DETECT']-&gt;setUserAgent($userAgent);
  $isMobile = $REX['MOBILE_DETECT']-&gt;isMobile();
  $isTablet = $REX['MOBILE_DETECT']-&gt;isTablet();
  // Use the force however you want.
}</code>
</pre>
<hr />
<p>Get the <code>version()</code> of components (in beta):</p>

<pre><code>&lt;?php
$REX['MOBILE_DETECT']-&gt;version('iPad'); // 4.3 (float)
$REX['MOBILE_DETECT']-&gt;version('iPhone') // 3.1 (float)
$REX['MOBILE_DETECT']-&gt;version('Android'); // 2.1 (float)
$REX['MOBILE_DETECT']-&gt;version('Opera Mini'); // 5.0 (float)
[...]</code>
</pre>
      </div>
    </div>
  </div>
</div>