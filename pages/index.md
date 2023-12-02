---
layout: layouts/home
permalink: /
eleventyNavigation:
  key: Hem 
  order: 1
numberOfLatestPostsToShow: 3
---

# Välkommen till min sida!
Här lägger jag upp lite vad jag vill! Om du läser runt kanske du får en bättre bild om vem jag är, eller kanske lär dig något nytt om något område jag intresserar mig för!

{% set postsCount = collections.posts | length %}
{% set latestPostsCount = postsCount | min(numberOfLatestPostsToShow) %}

# Senaste inlägg
Kanske någonting låter intressant?

{% set postslist = collections.posts | head(-1 * numberOfLatestPostsToShow) %}
{% set postslistCounter = postsCount %}
{% include "postslist.njk" %}

{% set morePosts = postsCount - numberOfLatestPostsToShow %}
{% if morePosts > 0 %}
<p>{{ morePosts }} fler inlägg{% if morePosts != 1 %}{% endif %} finns i <a href="/blog">bloggen.</a></p>
{% endif %}

{# List every content page in the project #}
{#
<ul>
	{%- for entry in collections.all %}
	<li><a href="{{ entry.url }}"><code>{{ entry.url }}</code></a></li>
	{%- endfor %}
</ul>
#}
