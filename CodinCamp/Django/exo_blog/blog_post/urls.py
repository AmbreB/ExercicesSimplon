from django.conf.urls import url
from views import post_list, post_display

urlpatterns = [
	url(r'^list$', post_list),
	url(r'^(?P<slug>[\w-]+)$', post_display),

]