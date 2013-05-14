<h5>Usage and examples</h5>

<p>Include and instantiate the class:</p>

<div class="highlight"><pre><span class="o">&lt;?</span><span class="nx">php</span>
<span class="k">include</span> <span class="s1">'Mobile_Detect.php'</span><span class="p">;</span>
<span class="nv">$detect</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">Mobile_Detect</span><span class="p">();</span>
</pre></div>

<p>Basic usage, looking for mobile devices or tablets:</p>

<div class="highlight"><pre><span class="o">&lt;?</span><span class="nx">php</span>
<span class="k">if</span> <span class="p">(</span><span class="nv">$detect</span><span class="o">-&gt;</span><span class="na">isMobile</span><span class="p">())</span> <span class="p">{</span>
    <span class="c1">// Any mobile device.</span>
<span class="p">}</span>
</pre></div>

<div class="highlight"><pre><span class="o">&lt;?</span><span class="nx">php</span>
<span class="k">if</span><span class="p">(</span><span class="nv">$detect</span><span class="o">-&gt;</span><span class="na">isTablet</span><span class="p">()){</span>
    <span class="c1">// Any tablet device.</span>
<span class="p">}</span>
</pre></div>

<p>Check for a specific platform with the help of the magic methods:</p>

<div class="highlight"><pre><span class="o">&lt;?</span><span class="nx">php</span>
<span class="k">if</span><span class="p">(</span><span class="nv">$detect</span><span class="o">-&gt;</span><span class="na">isiOS</span><span class="p">()){</span>
    <span class="c1">// Code to run for the Apple's iOS platform.</span>
<span class="p">}</span>
</pre></div>

<div class="highlight"><pre><span class="o">&lt;?</span><span class="nx">php</span>
<span class="k">if</span><span class="p">(</span><span class="nv">$detect</span><span class="o">-&gt;</span><span class="na">isAndroidOS</span><span class="p">()){</span>
    <span class="c1">// Code to run for the Google's Android platform.</span>
<span class="p">}</span>
</pre></div>

<p>Other case insensitive available methods are <code>isIphone()</code>, <code>isIpad()</code>, <code>isBlackBerry()</code>, <code>isKindle()</code>, <code>isOpera()</code>, etc. For the full list of available methods check the <code>demo.php</code> file.</p>

<p>Alternative method <code>is()</code> for checking specific properties (in beta):</p>

<div class="highlight"><pre><span class="o">&lt;?</span><span class="nx">php</span>
<span class="nv">$detect</span><span class="o">-&gt;</span><span class="na">is</span><span class="p">(</span><span class="s1">'Chrome'</span><span class="p">)</span>
<span class="nv">$detect</span><span class="o">-&gt;</span><span class="na">is</span><span class="p">(</span><span class="s1">'iOS'</span><span class="p">)</span>
<span class="nv">$detect</span><span class="o">-&gt;</span><span class="na">is</span><span class="p">(</span><span class="s1">'UC Browser'</span><span class="p">)</span>
<span class="p">[</span><span class="o">...</span><span class="p">]</span>
</pre></div>

<p>Batch mode using <code>setUserAgent()</code>:</p>

<div class="highlight"><pre><span class="o">&lt;?</span><span class="nx">php</span>
<span class="nv">$userAgents</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span>
<span class="s1">'Mozilla/5.0 (Linux; Android 4.0.4; Desire HD Build/IMM76D) AppleWebKit/535.19 (KHTML, like Gecko) Chrome/18.0.1025.166 Mobile Safari/535.19'</span><span class="p">,</span>
<span class="s1">'BlackBerry7100i/4.1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 VendorID/103'</span><span class="p">,</span>
<span class="p">[</span><span class="o">...</span><span class="p">]</span>
<span class="p">);</span>
<span class="k">foreach</span><span class="p">(</span><span class="nv">$userAgents</span> <span class="k">as</span> <span class="nv">$userAgent</span><span class="p">){</span>
  <span class="nv">$detect</span><span class="o">-&gt;</span><span class="na">setUserAgent</span><span class="p">(</span><span class="nv">$userAgent</span><span class="p">);</span>
  <span class="nv">$isMobile</span> <span class="o">=</span> <span class="nv">$detect</span><span class="o">-&gt;</span><span class="na">isMobile</span><span class="p">();</span>
  <span class="nv">$isTablet</span> <span class="o">=</span> <span class="nv">$detect</span><span class="o">-&gt;</span><span class="na">isTablet</span><span class="p">();</span>
  <span class="c1">// Use the force however you want.</span>
<span class="p">}</span>
</pre></div>

<p>Get the <code>version()</code> of components (in beta):</p>

<div class="highlight"><pre><span class="o">&lt;?</span><span class="nx">php</span>
<span class="nv">$detect</span><span class="o">-&gt;</span><span class="na">version</span><span class="p">(</span><span class="s1">'iPad'</span><span class="p">);</span> <span class="c1">// 4.3 (float)</span>
<span class="nv">$detect</span><span class="o">-&gt;</span><span class="na">version</span><span class="p">(</span><span class="s1">'iPhone'</span><span class="p">)</span> <span class="c1">// 3.1 (float)</span>
<span class="nv">$detect</span><span class="o">-&gt;</span><span class="na">version</span><span class="p">(</span><span class="s1">'Android'</span><span class="p">);</span> <span class="c1">// 2.1 (float)</span>
<span class="nv">$detect</span><span class="o">-&gt;</span><span class="na">version</span><span class="p">(</span><span class="s1">'Opera Mini'</span><span class="p">);</span> <span class="c1">// 5.0 (float)</span>
<span class="p">[</span><span class="o">...</span><span class="p">]</span>
</pre></div>
