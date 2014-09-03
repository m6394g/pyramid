import urllib2,json

from .models import DBSession
from .models import User

__dummyImage = "static/img/img-default-med.jpg"

def __getFacebookProfilePic(user_id,access_token):
    
    urlProfilePic = "https://graph.facebook.com/"
    urlProfilePic += user_id
    urlProfilePic += "/picture?type=large&redirect=false&access_token="
    urlProfilePic += access_token
        
    urlRequest = urllib2.Request(urlProfilePic)
    
    userData = urllib2.urlopen(urlRequest)
    userData = json.load(userData)
    
    urlPic = userData['data']['url']
    isSilhouette = str(userData['data']['is_silhouette'])
    
    if isSilhouette == 'true':
        return __dummyImage
    return urlPic

def __getGoogleProfilePic(userData):

	try:
	    return userData['picture']
	except:
	    return __dummyImage


def __getTwitterProfilePic(userInfo):

	try:
		return userInfo['profile']['photos'][0]['value']
	except:
		return __dummyImage


def loginTwitter(userInfo):

	result = userInfo

	email = result['profile']['preferredUsername']

	dbFoundUser = DBSession.query(User).filter(User.email == email).first()
	if dbFoundUser:
		return dbFoundUser

	user_id = result['profile']['accounts'][0]['userid']
	domain = result['profile']['accounts'][0]['domain']
	access_token = result['credentials']['oauthAccessToken']

	about = None
	password = None

	given_name = result['profile']['displayName']
	formatted = result['profile']['name']['formatted']
	family_name = result['profile']['name']['formatted']

	profile_pic = __getTwitterProfilePic(userInfo)

	refresh_token = result['credentials']['oauthAccessTokenSecret']

	dbFoundUser = User(given_name,formatted,family_name,
	                 email,user_id,domain,access_token,refresh_token,
	                 about,
	                 password,profile_pic)
	    
	DBSession.add(dbFoundUser)
	DBSession.flush()

	return dbFoundUser


def loginFacebook(userInfo):

	result = userInfo

	email = result['profile']['verifiedEmail']

	dbFoundUser = DBSession.query(User).filter(User.email == email).first()
	if dbFoundUser:
		return dbFoundUser

	user_id = result['profile']['accounts'][0]['userid']
	domain = result['profile']['accounts'][0]['domain']
	access_token = result['credentials']['oauthAccessToken']

	about = None
	password = None

	given_name = result['profile']['name']['givenName']
	formatted = result['profile']['name']['formatted']
	family_name = result['profile']['name']['familyName']

	profile_pic = __getFacebookProfilePic(user_id,access_token)

	refresh_token = None

	dbFoundUser = User(given_name,formatted,family_name,
	                 email,user_id,domain,access_token,refresh_token,
	                 about,
	                 password,profile_pic)
	    
	DBSession.add(dbFoundUser)
	DBSession.flush()

	return dbFoundUser


def loginGoogle(userInfo):

	result = userInfo

	email = result['profile']['verifiedEmail']

	dbFoundUser = DBSession.query(User).filter(User.email == email).first()
	if dbFoundUser:
		return dbFoundUser

	user_id = result['profile']['accounts'][0]['userid']
	domain = result['profile']['accounts'][0]['domain']
	access_token = result['credentials']['oauthAccessToken']

	about = None
	password = None

	urlRequest = urllib2.Request("https://www.googleapis.com/oauth2/v1/userinfo?alt=json&access_token="+access_token)
	userData = urllib2.urlopen(urlRequest)
	userData = json.load(userData)

	given_name = userData['given_name']
	formatted = userData['name']
	family_name = userData['family_name']

	profile_pic = __getGoogleProfilePic(userData)

	refresh_token = result['credentials']['oauthRefreshToken']

	dbFoundUser = User(given_name,formatted,family_name,
	                 email,user_id,domain,access_token,refresh_token,
	                 about,
	                 password,profile_pic)
	    
	DBSession.add(dbFoundUser)
	DBSession.flush()

	return dbFoundUser

   

