from sqlalchemy import Column,Integer

from ..models import Base,DBSession

from sqlalchemy.types import String,Boolean
from sqlalchemy.schema import ForeignKey
from sqlalchemy.orm import relationship

from ..util import getTimeEpoch
from ..user.models import Customer
from ..venue.models import Venue


class VenueRating(Base):
    
    __tablename__ = 'venue_ratings'
    
    id = Column(Integer,primary_key=True)
    
    type = Column(String(256))
    rating = Column(Integer)
    
    venue_id = Column(Integer,ForeignKey('venues.id'),default = 1)
    #venue = relationship("Venue",foreign_keys=[venue_id]) # if required
    
    customer_id = Column(Integer,ForeignKey('customers.id'),default = 1)
    #customer = relationship("Customer",foreign_keys=[customer_id]) # if required
    
    def __init__(self,
                 type,rating,
                 venue_id,
                 customer_id):
        
        self.type = type
        self.rating = rating
        self.venue_id = venue_id
        self.customer_id = customer_id
        
    def getJSON(self):
        
        jsonDict = {}
        jsonDict['id'] = self.id
        jsonDict['type'] = self.type
        jsonDict['rating'] = self.rating
        jsonDict['venue_id'] = self.venue_id
        jsonDict['customer_id'] = self.customer_id
        
        return jsonDict
        
        
    
class VenueReview(Base):
    
    __tablename__ = 'venue_reviews'
    
    id = Column(Integer,primary_key=True)    
    
    review = Column(String(8192))
    
    venue_id = Column(Integer,ForeignKey('venues.id'),default = 1)
    #venue = relationship("Venue",foreign_keys=[venue_id]) # if required
    
    customer_id = Column(Integer,ForeignKey('customers.id'),default = 1)
    #customer = relationship("Customer",foreign_keys=[customer_id]) # if required
    
    def __init__(self,
                 review,
                 venue_id,
                 customer_id):
        
        self.review = review
        self.venue_id = venue_id
        self.customer_id = customer_id
        
    def getJSON(self):
        
        jsonDict = {}
        jsonDict['id'] = self.id
        jsonDict['review'] = self.review
        jsonDict['venue_id'] = self.venue_id
        jsonDict['customer_id'] = self.customer_id
        
        return jsonDict
    
    
    
class VenueFeedback(Base):
    
    __tablename__ = 'venue_feedbacks'
    
    id = Column(Integer,primary_key=True)    
    
    feedback = Column(String(8192))
    
    venue_id = Column(Integer,ForeignKey('venues.id'),default = 1)
    #venue = relationship("Venue",foreign_keys=[venue_id]) # if required
    
    customer_id = Column(Integer,ForeignKey('customers.id'),default = 1)
    #customer = relationship("Customer",foreign_keys=[customer_id]) # if required
    
    def __init__(self,
                 feedback,
                 venue_id,
                 customer_id):
        
        self.feedback = feedback
        self.venue_id = venue_id
        self.customer_id = customer_id
        
    def getJSON(self):
        
        jsonDict = {}
        jsonDict['id'] = self.id
        jsonDict['feedback'] = self.feedback
        jsonDict['venue_id'] = self.venue_id
        jsonDict['customer_id'] = self.customer_id
        
        return jsonDict    
    
    

class VenueReviewVote(Base):
    
    __tablename__ = 'venue_review_vote'
    
    id = Column(Integer,primary_key=True)
    
    vote = Column(Boolean,default = True)
    
    customer_id = Column(Integer,ForeignKey('customers.id'),default = 1)
    #customer = relationship("Customer",foreign_keys=[customer_id]) # if required
    
    venue_review_id = Column(Integer,ForeignKey('venue_reviews.id'),default = 1)
    #venue_review = relationship("VenueReview",foreign_keys=[venue_review_id]) # if required
    
    def __init__(self,
                 vote,
                 customer_id,
                 venue_review_id):
        
        self.vote = vote
        self.customer_id = customer_id
        self.venue_review_id = venue_review_id
        
    def getJSON(self):
        
        jsonDict = {}
        jsonDict['vote'] = self.vote
        jsonDict['customer_id'] = self.customer_id
        jsonDict['venue_review_id'] = self.venue_review_id
        
        return jsonDict
    
    
    
    