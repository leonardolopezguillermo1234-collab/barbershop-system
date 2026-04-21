import React from 'react';
import { NavigationContainer } from '@react-navigation/native';
import { createStackNavigator } from '@react-navigation/stack';
import AppointmentsScreen from './screens/AppointmentsScreen';
import BarbersScreen from './screens/BarbersScreen';
import ClientsScreen from './screens/ClientsScreen';

const Stack = createStackNavigator();

const App = () => {
  return (
    <NavigationContainer>
      <Stack.Navigator initialRouteName="Appointments">
        <Stack.Screen name="Appointments" component={AppointmentsScreen} />
        <Stack.Screen name="Barbers" component={BarbersScreen} />
        <Stack.Screen name="Clients" component={ClientsScreen} />
      </Stack.Navigator>
    </NavigationContainer>
  );
};

export default App;
