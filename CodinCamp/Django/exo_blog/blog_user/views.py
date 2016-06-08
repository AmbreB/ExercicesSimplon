from django.shortcuts import render
from datetime import datetime

def hello_world(request):
	date = datetime.now()
	return render(request, 'index.html', {'current_date' : date})