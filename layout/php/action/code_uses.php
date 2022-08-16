tariff_power / tariff_id - Tariff Group
[A] umac / umac_db - Monthly Average Consumption (mac)
[Z6] umd - Max Demand (max_demand)
[Z7] upu - Peak Usage (peak_usage)
[Z8] uopu - Off Peak Usage (offpeak)


[B] usc - Solar Capacity
[J] uyl - Year of Lease
[L] unu - Number of USES to install
[E] ubp - Battery Price
[F] uscb - Shipment Cost for Battery %
[M] uid - Import Duty
[N] ugt - Ground Transport/Warehouse Storage
[O] ubi - Battery Installation
[C] uspc - Solar Panel Cost
[D] ubs - Battery Size
[G] umt - Maintenance & Tech Support Fee
[H] usif - System Insurance Fee %
[I] ubsf - Backend Support Fee %
[Z6_New] unmd - New Max Demand

umge - value monthly generation RE
umgg - value tariff after uses(Monthly Generation Grid (kWH))
vubp = value battery price
vubs = value battery size
vuscbs = value shipment cost for battery storage
vuid = value import duty for battery
vugt = value ground transport/warehouse storage
vubi = value battery installation
vusi = value system insurance
vups = value part sparing or helpdesk and backend support
vutsc = value total system cost
vutscy = value total system cost years (include leasing charge)
vuld = Leasing Deposit
vul = Leasing Cost
vupu = value Peak Usage

<!-- investment -->
[D] vubs = (ubs * unu)
[E] vubp = (ubp * unu) 
[F] vuscbs = (ubp * uscb)
[M] vuid = (uid * ubp)
[N] vugt = (ugt * ubp)
[O] vubi = (ubi * ubp)
[H] vusi = (uspc + ubp) * usif
[I] vups = (uspc + ubp) * ubsf

((C+E+F+M+N+O)+((G+H+I) x J)) - (G X 2)
[FCB1BL] vutsc = ((uspc + vubp + vuscbs + vuid + vugt + vubi) + ((umt + vusi +vups) * uyl)) - (umt * 2)

<!-- saving -->
((FCB1BL*0.03) x J) + FCB1BL
[FCB1] vutscy =  (( vutsc * 0.03) * uyl) + vutsc)

[FCB2Depo] vuld = vutscy * 0.1
[FCB2] vul = (vutscy - vuld) / (uyl - 1)

