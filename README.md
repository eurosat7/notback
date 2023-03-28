# feedback to notback\notback

## the bad stuff

First the elephant in the room.
In it's current state it is not acceptable by php developers.

Reasons being:

- no tests
- no namespaces
- no psr (one file per class)
- lack of inheritance
- separation of concerns
- generelly unaware of phptherightway.com ?
- Use the right tool for the right job (php is not scss, typescript, or vue.js)

That was the negative stuff...

## I'm curious

How much of this code was generated?

## interesting stuff

BUT, just for training, let's give it some love:

Some JS-Frontends like react or vue have a concept of components and treeshaking,
which means that only USED css and js gets baked into a combined and compacted file to be included.
And you could also create and REUSE instances with styles applied ...
so we might get some nice css and js out of it and
simulate behaviour from some popular js frontend
and maybe even do some webpack/encore stuff :D

## usage example

see index.php
