# Rocketship Florista Demo Profile

This module contains patches. For these patches to apply, your project
should require [`cweagans/composer-patches`](https://github.com/cweagans/composer-patches).
Read that project's README to set up your project to work with dependency
patching.

One bug that sometimes crops up with dependency patches, is that composer
doesn't pick them up immediately (if, say, a new release has an extra patch).
Either check the composer log or the composer.lock to make sure all patches
are applied properly, or run your update command twice.

# Florista
This profile will install a Demo site, called Florista. Using Page and Layout Builder, a rudimentary
Flower shop will be created.
