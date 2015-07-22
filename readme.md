#Twig Scratchpad

Clone of codepen.io, except using twig templating engine

Final result looks something like:
<img src="/img/demo2.jpg" />

## Build
Because this uses `shell_exec`, you have to host it on your own machine if you want to use it:
<code>
git clone https://github.com/ptraverse/twigscratch.git
</code>
<code>
php composer.phar update
</code>
<code>
php -S 0.0.0.0:1234
</code>
Now point your browser to the PHP dev server living at 0.0.0.0:1234 and you should find the same as below.

CodePen doesnt have Twig For Some reason:
<img src="/img/codepen.jpg" />

I'm sure this probably exists already out there somewhere but I couldn't find it on google so I just made it myself.