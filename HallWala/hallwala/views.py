from pyramid.response import Response
from pyramid.view import view_config,forbidden_view_config
from pyramid.security import remember,authenticated_userid, forget, Authenticated
from pyramid.httpexceptions import HTTPFound

from models import DBSession

from sqlalchemy import and_
import hashlib

@view_config(route_name='home',renderer='index.mako', permission='__no_permission_required__')
def homeView(request):
    return {}



@view_config(route_name='home',effective_principals=[Authenticated], renderer='dashboard.mako')
def dashboard(request):
    return {}

@view_config(route_name='loginpage',effective_principals=[Authenticated], renderer='html/login-page.mako')
def loginpage(request):
    return {}

@view_config(route_name='agent',effective_principals=[Authenticated], renderer='html/agent-registration.mako')
def agent(request):
    return dict(page='helper/navigation.mako')



@view_config(route_name='howItWorks',renderer='how_it_works.mako', permission='__no_permission_required__')
def howItWorks(request):
    return {}



@view_config(route_name='contact',renderer='contact.mako', permission='__no_permission_required__')
def contact(request):
    return {}



@view_config(route_name='aboutUs',renderer='about_us.mako', permission='__no_permission_required__')
def aboutUs(request):
    return {}



@view_config(route_name='termsAndConditions',renderer='terms_and_conditions.mako', permission='__no_permission_required__')
def termsAndConditions(request):
    return {}



@view_config(route_name='vision',renderer='vision.mako', permission='__no_permission_required__')
def vision(request):
    return {}



@view_config(route_name='team',renderer='team.mako', permission='__no_permission_required__')
def team(request):
    return {}



@forbidden_view_config()
def forbidden(request):
    return Response('Not Allowed')



@view_config(context='pyramid.exceptions.NotFound', renderer='json', permission='__no_permission_required__')
def notFound_view(request):
    notFound404 = '404 Not Found'
    return {'error' : notFound404}


