from sqlalchemy import Column,Integer

from ..models import Base,DBSession

from sqlalchemy.types import String
from sqlalchemy.schema import ForeignKey
from sqlalchemy.orm import relationship

from ..util import getTimeEpoch