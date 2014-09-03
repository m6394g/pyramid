from pyramid.config import Configurator
from sqlalchemy import engine_from_config
from pyramid.authentication import AuthTktAuthenticationPolicy
from pyramid.authorization import ACLAuthorizationPolicy
from pyramid.security import Authenticated

from pyramid.session import UnencryptedCookieSessionFactoryConfig
import os
import logging

from .models import (
    DBSession,
    Base,
    )

here = os.path.dirname(os.path.abspath(__file__))
log = logging.getLogger(__name__)


def main(global_config, **settings):
    """ This function returns a Pyramid WSGI application.
    """
    engine = engine_from_config(settings, 'sqlalchemy.')
    DBSession.configure(bind=engine)
    Base.metadata.bind = engine

    settings['mako.directories'] = os.path.join(here,'templates')

    session_factory = UnencryptedCookieSessionFactoryConfig('itsaseekreet')
    config = Configurator(settings=settings,root_factory='.models.RootFactory', session_factory=session_factory)
    
    """Velruse settings
    """
    config.include('velruse.providers.facebook')
    config.add_facebook_login_from_settings(prefix='velruse.facebook.')
    config.include('velruse.providers.google_oauth2')
    config.add_google_oauth2_login_from_settings(prefix='velruse.google.')
    config.include('velruse.providers.twitter')
    config.add_twitter_login_from_settings(prefix='velruse.twitter.')
    

    authn_policy = AuthTktAuthenticationPolicy('seekrit', hashalg='sha512')
    authz_policy = ACLAuthorizationPolicy()
    config.set_authentication_policy(authn_policy)
    config.set_authorization_policy(authz_policy)
    config.set_default_permission(Authenticated)

    config.add_static_view('static', 'hallwala:static')
    config.add_static_view('attachment',os.path.join(here, 'static/attachments'))
    config.add_static_view('assets',os.path.join(here, 'static/assets'))
    config.add_static_view('css',os.path.join(here, 'static/css'))
    config.add_static_view('images',os.path.join(here, 'static/images'))
    config.add_static_view('js',os.path.join(here, 'static/js'))
    config.include('pyramid_chameleon')
    
    
    """Routes Here"""
    config.add_route('home', '/')
    
    config.add_route('login', '/login')
    config.add_route('logout', '/logout')
    config.add_route('loginpage', '/login_page')
    config.add_route('agent', '/agent')
    
    """Static Pages"""
    config.add_route('howItWorks','/how_it_works')
    config.add_route('contact','/contact')
    config.add_route('aboutUs','/about_us')
    config.add_route('termsAndConditions','/terms_and_conditions')
    config.add_route('vision','/vision')
    config.add_route('team','/team')
    
    """Events API"""
    config.add_route('eventAdd','/event_add')
    config.add_route('eventGetAll','/event_get_all')
    config.add_route('eventGetType','/event_get_type/{type}')
    config.add_route('eventGet','/event_get/{event_id}')
    config.add_route('eventDelete','/event_delete/{event_id}')
    
    
    config.scan()
    return config.make_wsgi_app()

