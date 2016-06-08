from django.shortcuts import render
from models import Post

def post_list(request):
	posts = Post.objects.all()
	return render(request, 'post_list.html', {'posts' : posts})

def post_display(request, slug):
	post = Post.objects.get(slug = slug)
	
	return render(request, "post_display.html", {'post' : post})