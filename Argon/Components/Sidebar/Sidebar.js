import React from "react";
import PropTypes from "prop-types";
// import { useLocation, Link } from "react-router-dom";
// @material-ui/core components
import { makeStyles } from "@material-ui/core/styles";
import AppBar from "@material-ui/core/AppBar";
import Box from "@material-ui/core/Box";
import Container from "@material-ui/core/Container";
import Divider from "@material-ui/core/Divider";
import Drawer from "@material-ui/core/Drawer";
import Hidden from "@material-ui/core/Hidden";
import List from "@material-ui/core/List";
import ListItem from "@material-ui/core/ListItem";
import Menu from "@material-ui/core/Menu";
import Toolbar from "@material-ui/core/Toolbar";
import Typography from "@material-ui/core/Typography";
// @material-ui/icons components
import Clear from "@material-ui/icons/Clear";
import MenuIcon from "@material-ui/icons/Menu";

// core components
import componentStyles from "../../Assets/theme/components/sidebar";
import { Link } from "@inertiajs/inertia-react";
import { Icon } from "@material-ui/core";

const useStyles = makeStyles(componentStyles);

export default function Sidebar({ routes, logo, dropdown, input }) {
  const classes = useStyles();
  // const location = useLocation();
  const [anchorEl, setAnchorEl] = React.useState(null);

  const isMenuOpen = Boolean(anchorEl);

  const handleMenuOpen = (event) => {
    setAnchorEl(event.currentTarget);
  };

  const handleMenuClose = () => {
    setAnchorEl(null);
  };

  const menuId = "responsive-menu-id";
  // creates the links that appear in the left menu / Sidebar
  const createLinks = (routes) => {

    return routes.map((prop, key) => {

      if (prop.divider) {
        return <Divider key={key} classes={{ root: classes.divider }} />;
      } else if (prop.title) {
        return (
          <Typography
            key={key}
            variant="h6"
            component="h6"
            classes={{ root: classes.title }}
          >
            {prop.title}
          </Typography>
        );
      }


      let textContent = (
        <>
          <Box minWidth="2.25rem" display="flex" alignItems="center">
            {typeof prop.icon === "string" ? (
              <Box
                component="i"
                className={prop.icon + " " + classes["text" + prop.iconColor]}
              />
            ) : <Icon
              component={prop.icon}
              width="1.25rem"
              height="1.25rem"
              className={classes["text" + prop.iconColor]}
            />}


          </Box>
          {prop.name}
        </>
      );

      if (prop.Component) {
        return <ListItem
          key={key}
          classes={{
            root:
              classes.listItemRoot +
              (prop.upgradeToPro
                ? " " + classes.listItemRootUpgradeToPro
                : ""),
            selected: classes.listItemSelected,
          }}
        >
          <prop.Component />
        </ListItem>
      } else if (prop.href) {
        return (
          <ListItem
            key={key}
            component={"a"}
            href={prop.href}
            onClick={handleMenuClose}
            classes={{
              root:
                classes.listItemRoot +
                (prop.upgradeToPro
                  ? " " + classes.listItemRootUpgradeToPro
                  : ""),
              selected: classes.listItemSelected,
            }}
            target="_blank"
            selected={prop.upgradeToPro === true}
          >
            {textContent}
          </ListItem>
        );


      } else {
        return (
          <ListItem
            key={key}
            component={Link}
            onClick={handleMenuClose}
            href={prop.path}
            classes={{
              root:
                classes.listItemRoot +
                (prop.upgradeToPro
                  ? " " + classes.listItemRootUpgradeToPro
                  : ""),
              selected: classes.listItemSelected,
            }}
            selected={
              // location.pathname === prop.layout + prop.path ||
              prop.upgradeToPro === true
            }
          >
            {textContent}
          </ListItem>
        );
      }
    });



  };


  let logoImage = (
    <img style={{
      width: '150px'
    }} srcalt={logo.imgAlt} className='' src={'/assets/images/logo-dark.png'} />
  );


  let logoObject =
    logo && logo.innerLink ? (
      <a href='/' className={classes.logoLinkClasses}>
        {logoImage}
      </a>
    ) : logo && logo.outterLink ? (
      <a href='/' className={classes.logoLinkClasses}>
        {logoImage}
      </a>
    ) : null;


  return (
    <>
      <Hidden smDown implementation="css">
        <Drawer variant="permanent" anchor="left" open>
          <div>{logoObject}</div>
          <List classes={{ root: classes.listRoot }}>
            {createLinks(routes)}
          </List>
        </Drawer>
      </Hidden>
      <Hidden mdUp implementation="css">
        <AppBar position="relative" color="default" elevation={0}>
          <Toolbar>
            <Container
              display="flex!important"
              justifyContent="space-between"
              alignItems="center"
              marginTop=".75rem"
              marginBottom=".75rem"
              component={Box}
              maxWidth={false}
              padding="0!important"
            >
              <Box
                component={MenuIcon}
                width="2rem!important"
                height="2rem!important"
                aria-controls={menuId}
                aria-haspopup="true"
                onClick={handleMenuOpen}
              />
              {logoObject}
              {dropdown}
            </Container>
          </Toolbar>
        </AppBar>

        <Divider />

        <Menu
          anchorEl={anchorEl}
          anchorOrigin={{ vertical: "top", horizontal: "right" }}
          id={menuId}
          keepMounted
          transformOrigin={{ vertical: "top", horizontal: "right" }}
          open={isMenuOpen}
          onClose={handleMenuClose}
          classes={{ paper: classes.menuPaper }}
        >
          <Box
            display="flex"
            justifyContent="space-between"
            alignItems="center"
            paddingLeft="1.25rem"
            paddingRight="1.25rem"
            paddingBottom="1rem"
            className={classes.outlineNone}
          >
            {logoObject}
            <Box
              component={Clear}
              width="2rem!important"
              height="2rem!important"
              aria-controls={menuId}
              aria-haspopup="true"
              onClick={handleMenuClose}
            />
          </Box>
          <Box
            component={Divider}
            marginBottom="1rem!important"
            marginLeft="1.25rem!important"
            marginRight="1.25rem!important"
          />
          <Box paddingLeft="1.25rem" paddingRight="1.25rem">
            {input}
          </Box>
          <List classes={{ root: classes.listRoot }}>

            {createLinks(routes)}

          </List>
        </Menu>
      </Hidden>
    </>
  );
}
