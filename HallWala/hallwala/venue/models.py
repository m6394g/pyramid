from sqlalchemy import Column,Integer

from ..models import Base,DBSession

from sqlalchemy.types import String,Float
from sqlalchemy.schema import ForeignKey
from sqlalchemy.orm import relationship

from ..util import getTimeEpoch
from ..user.models import User,Customer,Contact,Vendor
from ..event.models import Event

class Accomodation(Base):
    
    __tablename__ = 'accomodation'
    
    id = Column(Integer,primary_key=True)
    
    min_accomodation = Column(Integer)
    max_accomodation = Column(Integer)
    
    def __init__(self,
                 min_accomodation,max_accomodation):
        
        self.min_accomodation = min_accomodation
        self.max_accomodation = max_accomodation
        
    def getJSON(self):
        
        jsonDict = {}
        jsonDict['id'] = self.id
        jsonDict['min_accomodation'] = self.min_accomodation
        jsonDict['max_accomodation'] = self.max_accomodation
        
        return jsonDict
    
    

class Venue(Base):
    
    __tablename__ = 'venues'
    
    id = Column(Integer,primary_key=True)
    
    name = Column(String(256))
    description = Column(String(2048))
    
    registration_number = Column(String(256))
    
    accomodation_id = Column(Integer,ForeignKey('accomodation.id'),default = 1)
    accomodation = relationship("Accomodation",foreign_keys=[accomodation_id])
    
    vendor_id = Column(Integer,ForeignKey('vendors.id'),default = 1)
    vendor = relationship("Vendor",foreign_keys=[vendor_id])
    
    def __init__(self,
                 name,description,
                 registration_number,
                 accomodation_id,
                 vendor_id):
        
        self.name = name
        self.description = description
        self.registration_number = registration_number
        self.accomodation_id = accomodation_id
        self.vendor_id = vendor_id
        
    def getJSON(self):
        
        jsonDict = {}
        jsonDict['id'] = self.id
        jsonDict['name'] = self.name
        jsonDict['description'] = self.description
        jsonDict['registration_number'] = self.registration_number
        
        return jsonDict
    
    

class VenueLocation(Base):
    
    __tablename__ = 'venue_location'
    
    id = Column(Integer,primary_key=True)
    
    latitude = Column(Float)
    longitude = Column(Float)
    
    state = Column(String(256))
    city = Column(String(256))
    locality = Column(String(256))
    address = Column(String(1024))
    
    venue_id = Column(Integer,ForeignKey('venues.id'),default = 1)
    #venue = relationship("Venue",foreign_keys=[venue_id]) # if required
    
    def __init__(self,
                 latitude,longitude,
                 state,city,locality,
                 address,
                 venue_id):
        
        self.latitude = latitude
        self.longitude = longitude
        
        self.state = state
        self.city = city
        self.locality = locality
        self.address = address
        
        self.venue_id = venue_id
    
    def getJSON(self):
        
        jsonDict = {}
        jsonDict['id'] = self.id
        jsonDict['latitude'] = self.latitude 
        jsonDict['longitude'] = self.longitude
        jsonDict['state'] = self.state
        jsonDict['city'] = self.city
        jsonDict['locality'] = self.locality
        jsonDict['address'] = self.address
        
        return jsonDict
    
    
    
class VenueImage(Base):
    
    __tablename__ = 'venue_images'
    
    id = Column(Integer,primary_key=True)
    
    url = Column(String(2048))
    thumbnail = Column(String(2048))
    caption = Column(String(2048))
    
    venue_id = Column(Integer,ForeignKey('venues.id'),default = 1)
    #venue = relationship("Venue",foreign_keys=[venue_id]) # if required
    
    def __init__(self,
                 url,thumbnail,
                 caption,
                 venue_id):
        
        self.url = url
        self.thumbnail = thumbnail
        self.caption = caption
        self.venue_id = venue_id
    
    def getJSON(self):
        
        jsonDict = {}
        jsonDict['id'] = self.id
        jsonDict['url'] = self.url
        jsonDict['thumbnail'] = self.thumbnail
        jsonDict['caption'] = self.caption
        
        return jsonDict
        
        
        
class VenueContact(Base):
    
    __tablename__ = 'venue_contacts'
    
    id = Column(Integer,primary_key=True)
    
    type = Column(String(256))
    info = Column(String(1024))
    
    venue_id = Column(Integer,ForeignKey('venues.id'),default = 1)
    #venue = relationship("Venue",foreign_keys=[venue_id]) # if required
    
    def __init__(self,
                 type,info,
                 venue_id):
        
        self.type = type
        self.info = info
        
        self.venue_id = venue_id
        
    def getJSON(self):
        
        jsonDict = {}
        jsonDict['id'] = self.id 
        jsonDict['type'] = self.type
        jsonDict['info'] = self.info        
        
        return jsonDict
    
    
    
class VenueEvent(Base):
    
    __tablename__ = 'venue_events'
    
    id = Column(Integer,primary_key=True)
    
    venue_id = Column(Integer,ForeignKey('venues.id'),default = 1)
    #venue = relationship("Venue",foreign_keys=[venue_id]) # if required
    
    event_id = Column(Integer,ForeignKey('events.id'),default = 1)
    #event = relationship("Event",foreign_keys=[event_id]) # if required
    
    def __init__(self,
                 venue_id,
                 event_id):
        
        self.venue_id = venue_id
        self.event_id = event_id
        
    def getJSON(self):
        
        jsonDict = {}
        jsonDict['id'] = self.id
        jsonDict['venue_id'] = self.venue_id
        jsonDict['event_id'] = self.event_id
    
        return jsonDict
        
        
        
        
