#Twig Scratchpad

Clone of codepen.io, except using twig templating engine

Final result looks something like:
<img src="/img/demo2.JPG">

## Build
Because this uses `shell_exec`, you have to host it on your own machine if you want to use it:
```
git clone https://github.com/ptraverse/twigscratch.git && cd twigscratch
mkdir tmp && chmod 777 tmp
php composer.phar update
php -S 0.0.0.0:1234
```

Now point your browser to the PHP dev server living at 0.0.0.0:1234 and you should find the same as above screenshot.

CodePen doesnt have Twig For Some reason:
<img src="/img/codepen.jpg" />

I'm sure this probably exists already out there somewhere but I couldn't find it on google so I just made it myself.