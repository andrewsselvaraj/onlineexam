import React from "react";
import * as FaIcons from 'react-icons/fa';
import * as AiIcons from 'react-icons/ai';
import * as IoIcons from 'react-icons/io';
import * as FiIcons from 'react-icons/fi';
import * as CgIcons from 'react-icons/cg';
import PersonOutlineIcon from '@mui/icons-material/PersonOutline';

export const SidebarData = [
    {
        title:'Home',
        path:'/',
        icon: <AiIcons.AiFillHome />,
        cName: 'nav-text'
    },
    {
        title:'Users',
        path:'/user',
        icon: <FiIcons.FiUsers />,
        cName: 'nav-text'
    },
    {
        title:'Company',
        path:'/company',
        icon: <CgIcons.CgOrganisation />,
        cName: 'nav-text'
    },
    {
        title:'Customer',
        path:'/customer',
        icon: <PersonOutlineIcon/>,
        cName: 'nav-text'
    },
    {
        title:'Product',
        path:'/product',
        icon: <FaIcons.FaCartPlus />,
        cName: 'nav-text'
    },
    {
        title:'Report',
        path:'/report',
        icon: <IoIcons.IoIosPaper />,
        cName: 'nav-text'
    },
    {
        title:'New User',
        path:'/userentry',
        icon: <FiIcons.FiUsers />,
        cName: 'nav-text'
    },
    {
        title:'New Company',
        path:'/companyentry',
        icon: <CgIcons.CgOrganisation />,
        cName: 'nav-text'
    },
    {
        title:'New Customer',
        path:'/customerentry',
        icon: <PersonOutlineIcon />,
        cName: 'nav-text'
    },
    {
        title:'New Product',
        path:'/productentry',
        icon: <FaIcons.FaCartPlus />,
        cName: 'nav-text'
    },
    {
        title:'Report',
        path:'/report',
        icon: <IoIcons.IoIosPaper />,
        cName: 'nav-text'
    },
    {
        title:'Report',
        path:'/report',
        icon: <IoIcons.IoIosPaper />,
        cName: 'nav-text'
    }
]
