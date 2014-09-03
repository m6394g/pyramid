from sqlalchemy import Column,Integer

from ..models import Base,DBSession

from sqlalchemy.types import String
from sqlalchemy.schema import ForeignKey
from sqlalchemy.orm import relationship

from ..util import getTimeEpoch

class User(Base):
    
    __tablename__ = 'users'
    
    id = Column(Integer,primary_key=True)
    
    given_name = Column(String(256))
    formatted = Column(String(256))
    family_name = Column(String(256))
    
    email = Column(String(256),nullable = False)
    
    user_id = Column(String(256))
    domain = Column(String(256))
    access_token = Column(String(256))
    refresh_token = Column(String(256))
    
    profile_pic = Column(String(512))
    
    about = Column(String(512))
    
    password = Column(String(256))
    
    joining_time = Column(Integer)
    
    def __init__(self,
                 given_name,formatted,family_name,
                 email,user_id,
                 domain,access_token,refresh_token,
                 about,
                 password,profile_pic):
        
        self.given_name = given_name
        self.formatted = formatted
        self.family_name = family_name
        
        self.email = email
        self.user_id = user_id
        self.domain = domain
        self.access_token = access_token
        self.refresh_token = refresh_token
        
        self.password = password
        
        self.about = about
        self.profile_pic = profile_pic
        
        self.joining_time = getTimeEpoch()
        
    def getJSON(self):
        
        jsonDict = {}
        jsonDict['id'] = self.id
        jsonDict['name'] = self.given_name
        jsonDict['about'] = self.about
        jsonDict['profile_pic'] = self.profile_pic
        jsonDict['domain'] = self.domain
        jsonDict['email'] = self.email
        jsonDict['joining_time'] = self.joining_time
        
        return jsonDict
    
    

class Customer(Base):
    
    __tablename__ = 'customers'
    
    id = Column(Integer,primary_key=True)
    
    user_id = Column(Integer,ForeignKey('users.id'),default = 1)
    user = relationship("User",foreign_keys=[user_id])

    def __init__(self,
                 user_id):
        
        self.user_id  = user_id
        
    def getJSON(self):
        
        jsonDict = {}
        jsonDict['id'] = self.id
        jsonDict['user_id'] = self.user_id
        
        return jsonDict
    
        

class Vendor(Base):
    
    __tablename__ = 'vendors'
    
    id = Column(Integer,primary_key=True)
    
    user_id = Column(Integer,ForeignKey('users.id'),default = 1)
    user = relationship("User",foreign_keys=[user_id])
    
    pan_card_number = Column(String(256))

    def __init__(self,
                 user_id,
                 pan_card_number):
        
        self.user_id  = user_id
        self.pan_card_number = pan_card_number
        
    def getJSON(self):
        
        jsonDict = {}
        jsonDict['id'] = self.id
        jsonDict['user_id'] = self.user_id
        jsonDict['pan_card_number'] = self.pan_card_number
        
        return jsonDict
    
    

class Contact(Base):
    
    __tablename__ = 'contacts'
    
    id = Column(Integer,primary_key=True)
    
    user_id = Column(Integer,ForeignKey('users.id'),default = 1)
    #user = relationship("User",foreign_keys=[user_id]) #if Required
    
    type = Column(String(256))
    info = Column(String(1024))
    
    def __init__(self,
                 user_id,
                 type,info):
        
        self.user_id = user_id
        self.type = type
        self.info = info
        
    def getJSON(self):
        
        jsonDict = {}
        jsonDict['id'] = self.id 
        jsonDict['type'] = self.type
        jsonDict['info'] = self.info        
        
        return jsonDict
        
        
        
