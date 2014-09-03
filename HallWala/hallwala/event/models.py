from sqlalchemy import Column,Integer

from ..models import Base,DBSession

from sqlalchemy.types import String
from sqlalchemy.schema import ForeignKey
from sqlalchemy.orm import relationship

class Event(Base):
    
    __tablename__ = 'events'
    
    id = Column(Integer,primary_key=True)
    name = Column(String(256))
    type = Column(String(256))
    description = Column(String(2048))
    
    def __init__(self,name,type,description):
        
        self.name = name
        self.type = type
        self.description = description
        
    def getJSON(self):
        
        jsonDict = {}
        jsonDict['id'] = self.id
        jsonDict['name'] = self.name
        jsonDict['type'] = self.type
        jsonDict['description'] = self.description
          
        return jsonDict
        
        
        