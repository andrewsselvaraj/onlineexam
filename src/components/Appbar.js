import * as React from 'react';
import AppBar from '@mui/material/AppBar';
import Box from '@mui/material/Box';
import Toolbar from '@mui/material/Toolbar';
import Typography from '@mui/material/Typography';
import Button from '@mui/material/Button';
import IconButton from '@mui/material/IconButton';
import MenuIcon from '@mui/icons-material/Menu';



export default function Appbar() {
  return (
    <div>
    <Box sx={{ flexGrow: 1 }}>
      <AppBar position="static">
        <Toolbar>
          <IconButton
            size="large"
            edge="start"
            color="inherit"
            aria-label="menu"
            sx={{ mr: 2 }}
          >
            <MenuIcon />
          </IconButton>
          <Typography variant="h6" component="div" sx={{ flexGrow: 1 }}>
            Inventory Management
          </Typography>
          <Button color="inherit">User</Button>
          <Button color="inherit">Company</Button>
          <Button color="inherit">Customer</Button>
          <Button color="inherit">Product</Button>
          <Button color="inherit">Login</Button>
        </Toolbar>
      </AppBar>
    </Box>
    </div>
  )
}
