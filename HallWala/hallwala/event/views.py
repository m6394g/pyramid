import uuid
import glob,PIL
from PIL import Image
from pyramid.httpexceptions import HTTPFound
from pyramid.view import view_config
from pyramid.security import authenticated_userid

from models import DBSession,Event

@view_config(route_name='eventAdd',
             renderer='json',
             request_method='POST')
def eventAdd(request):
    
    eventName = request.POST['name']
    eventType = request.POST['type']
    eventDescription = request.POST['description']
  
    image = request.POST.getall('file')
    for i in image:
	imageId = uuid.uuid1()
	imageUrl = str(imageId)
	open('/home/mohit/intern/hallwala/HallWala/hallwala/images/%d.jpg' % (imageId), 'wb').write(i.file.read())

    for infile in glob.glob("/home/mohit/intern/hallwala/HallWala/hallwala/images/*.jpg"):
        im = Image.open(infile)
	# don't save if thumbnail already exists
	if infile[0:2] != "T_":
	# convert to thumbnail image
		im.thumbnail((128, 128), Image.ANTIALIAS)
	        # prefix thumbnail file with T_
	        im.save("T_" + infile, "JPEG")



    newEvent = Event(eventName,eventType,eventDescription)
    DBSession.add(newEvent)
    DBSession.flush()
   
    event = newEvent.getJSON()
    return {'event' : event}



@view_config(route_name='eventGetAll',
             renderer='json',
             request_method='GET')
def eventGetAll(request):
    
    eventQuery = DBSession.query(Event)
    
    events = []
    for event in eventQuery.all():
        events.append(event.getJSON()) 
    
    return {'events' : events}



@view_config(route_name='eventGet',
             renderer='json',
             request_method='GET')
def eventGet(request):
    
    eventId = int(request.matchdict['event_id'])
    
    eventQuery = DBSession.query(Event).filter(Event.id == eventId).first()
    event = eventQuery.getJSON()
    
    return {'event' : event}



@view_config(route_name='eventGetType',
             renderer='json',
             request_method='GET')
def eventGetType(request):
    
    eventType = request.matchdict['type']
    
    eventQuery = DBSession.query(Event).filter(Event.type == eventType)
    
    events = []
    for event in eventQuery.all():
        events.append(event.getJSON()) 
    
    return {'events' : events}
    


@view_config(route_name='eventDelete',
             renderer='json',
             request_method='DELETE')
def eventDelete(request):
    
    eventId = int(request.matchdict['event_id'])
    
    event = DBSession.query(Event).filter(Event.id == eventId).first()
    if event == None:
        return {'status' : 'Event Not Found'}
    
    DBSession.delete(event)
    DBSession.commit()
    
    return {'status' : 'Deleted'}


