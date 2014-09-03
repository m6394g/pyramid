from pyramid.response import Response
from pyramid.view import view_config, forbidden_view_config
from pyramid.security import remember,authenticated_userid, forget, Authenticated

from pyramid.httpexceptions import HTTPFound

import urllib2,json

from .models import DBSession
from .models import User
from ..util import row2dict

from login_provider import loginTwitter,loginGoogle,loginFacebook


@view_config(
    context='velruse.AuthenticationComplete',
    renderer='blank.mako',
    permission='__no_permission_required__'
)
def login_complete_view(request):
    
    context = request.context
    result = {
        'provider_type': context.provider_type,
        'provider_name': context.provider_name,
        'profile': context.profile,
        'credentials': context.credentials,
    }

    provider_name = result['provider_name']

    if provider_name == 'twitter':
        dbFoundUser = loginTwitter(result)
    elif provider_name == 'google':
        dbFoundUser = loginGoogle(result)
    elif provider_name == 'facebook':
        dbFoundUser = loginFacebook(result)

    request.session['user'] = dbFoundUser.getJSON()
    headers = remember(request,dbFoundUser.id) 

    return HTTPFound(location = request.route_url('home'), headers = headers)

@view_config(route_name='logout')
def logout(request):
    
    currentUser = int(authenticated_userid(request))
    headers = forget(request)
    
    request.session.invalidate()
    return HTTPFound(location = request.route_url('home'), headers = headers)

