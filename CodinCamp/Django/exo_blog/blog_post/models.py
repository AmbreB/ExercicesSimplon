from __future__ import unicode_literals

from django.db import models
from autoslug import AutoSlugField
from django.contrib.auth.models import User

class Post(models.Model):
	title = models.CharField(max_length=120)
	body = models.TextField()
	date_creation = models.DateTimeField(auto_now_add=True)
	slug = AutoSlugField(populate_from='title', null=True)
	author = models.ForeignKey(User)

	def __unicode__(self):
		return "%s" % self.title